package main

import (
	"fmt"
	"sync"
)

const (
	max_val = 100
	min_val = 1
	num     = 3
)

type Data struct {
	X int
	Y int
}

func main() {
	ch := make(chan Data)
	wg := &sync.WaitGroup{}
	wg.Add(1)
	go func() {
		defer wg.Done()
		for i := range max_val {
			ch <- Data{i, i * num}
		}
	}()
	wg.Add(1)
	go func() {
		defer wg.Done()
		for j := range max_val {
			ch <- Data{j + 100, j*num + 1000}
		}
	}()

	go func() {
		wg.Wait()
		close(ch)
	}()
	go func() {
		for v := range ch {
			fmt.Println("Worker 1", v)
		}
	}()
	for v := range ch {
		fmt.Println("Main worker ", v)
	}
}
