# Push Down Automata Checker

This repository contains a simple implementation of a Push Down Automata (PDA) checker written in HTML and PHP. The PDA checker can handle both Deterministic Push Down Automata (DPDA) and Non-Deterministic Push Down Automata (NPDA). 

## Features

- Input the PDA transition table.
- Input a string to check against the PDA.
- Supports both DPDA and NPDA.

## Getting Started

### Prerequisites

To run this project, you need a web server with PHP support (e.g., Apache, Nginx, XAMPP, WAMP).

### Installation

1. Clone this repository to your local machine.
    ```bash
    git clone https://github.com/yourusername/pda-checker.git
    ```

2. Ensure that your web server is set up and running. Place the `thoc.php` file in the web server's root directory or any directory you prefer.

3. Open your web browser and navigate to the location where you placed `thoc.php`. For example:
    ```
    http://localhost/thoc.php
    ```

## Usage

1. Open the `thoc.php` file in your web browser.

2. Enter the PDA transition table in the provided format. The format should include states, input symbols, stack symbols, and transitions.

3. Enter the string you want to check against the PDA.

4. Submit the form to check if the string is accepted by the PDA.
