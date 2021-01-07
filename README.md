# WebAndCow Challenge PHP Bootstrap

PHP Bootstrap [to play to WebAndCow challenges](https://code-challenge.webandcow.com/)

## Getting started on Unix or Mac OS X system

### Clone the repository
```shell
git clone https://github.com/klnjmm/webandcow-challenge-bootstrap.git your-project-name
cd your-project-name
```

### Init

```shell
make init
make up
```

Let's code !

## How to resolve challenges

* .Open `.env` file and fill `API_KEY` variables
  * `API_KEY` can be copy from [your profile page](https://code-challenge.webandcow.com/achievments/visualisationAchievment)
* Write your solution in `src/Solution.php`
* Write your unit tests in `tests/units/SolutionTest.php` 
* Try your solution : 
```
php index.php
```


## Developing on Unix or Mac OS X system

Here a few commands that can help you :

* Launch unit tests
```shell
make unit-tests
```

* Launch code sniffer
```
make code-sniffer
```


## Possible errors

* Bad API KEY. Please copy it again from  [your profile page](https://code-challenge.webandcow.com/achievments/visualisationAchievment) in `API_KEY`in your `.env` file
```
Exception: Error when contacting API -- Array
  (
  [0] => Key User non valide
  )
```

## Licensing
Do whatever you want with this !