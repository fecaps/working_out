# Working Out

## Table Of Contents

1. [Setup](#setup)
    1. [Clone](#clone)
    1. [Installing](#installing)
    1. [Build](#build)
    1. [Composer Scripts](#composer-scripts)
    1. [Tests](#tests)
    1. [Git Hooks](#git-hooks)
1. [Project Definitions](#project-definitions)
    1. [Organization](#organization)

## Setup

### Clone

Clone the project and enter on its folder:

```bash
$ git clone git@github.com:fecaps/working_out.git && \
cd working_out
```

### Installing

```bash
$ composer install
```

** Only necessary in case of willing to run composer scripts and tests.

### Build

- Build Docker image and run it:

```bash
$ docker-compose up --build
```

## Composer Scripts

As Docker is terminated when the CLI finishes its execution it's required to
install the dependencies locally in order to run all composer scripts.

The project has these `composer` scripts:

```bash
composer run-script codeStyle
# code style check

composer run-script fixWithCodeSniffer
# fix with code sniffer

composer run-script copyPasteDetector
# mess detector

composer run-script messDetector
# copy/paste detector

composer run-script objectCalisthenics
# object calisthenics rules

composer run-script fixStyle
# fix style
```

### Tests

As Docker is terminated when the CLI finishes its execution it's required to
install the dependencies locally in order to run the tests.

- Running tests:

```bash
$ composer run-script tests
```

The tests generate a HTML and TXT reports which use **XDebug** and it's
located on `report` folder.

- Showing code coverage in TXT:

```bash
$ cat report/txt-report
```

In case of willing to see it in HTML, open `report/index.html`
file in host machine. Example:

```bash
$ google-chrome report/index.html
```

### Git Hooks

There are two git hooks, which are composed of **composer scripts**
and **testing scripts**.

- `pre-commit`:
    - `codeStyle`
    - `copyPasteDetector`
    - `messDetector`
    - `objectCalisthenics`

- `pre-push`:
    - `codeStyle`
    - `copyPasteDetector`
    - `messDetector`
    - `objectCalisthenics`
    - `tests`

## Project Definitions

### Organization

The project consists of a CLI. This CLI is responsible for generating the exercises,
once it's done the Docker container is terminated.

The project is composed of these resources:
  - `Enum` - for Participants, Exercises, Beginner and Professional
  - `Generator - Context` - Resource responsible for switching the participant
  level at runtime based on its level (Strategy pattern)
  - `Generator - Level` - Implementation details on each participant level
  - `Generator - Validator` - Validation for each level and for the Gym
  - `Generator - Exercises` - The exercises creation
  - `Transformer` - The response transformation

In case of willing to add some level these are the steps to follow:

- Adding a level in `App\Generator\Level` namespace
- Adding new level to the exercising context (Strategy) in `App\Generator\Context\ExercisingLevelContext` file
