# Movidiam PHP test for candidates

**Please don't fork this repository** - clone it and send us a zip file with everything in

## Instructions

Write a **CLI tool** using PHP that

1. Fetches an amount of *top games* from the [twitch.tv API](https://github.com/justintv/Twitch-API/blob/master/v3_resources/games.md#get-gamestop) specified by the user
2. Sorts the fetched games by either `channels` or `viewers` in `descending` or `ascending` orders input by the user
3. Saves this list to a CSV with columns: `name`, `channels`, `viewers`

#### Start by having a look at `cli.php` and running it `php cli.php`

## Rules

The rules are purposely open so we can see how you approach tasks in a real-world environment

* There is no time limit
* We have given a basic framework but you can change what we have given you in any way you want
* You can use any composer packages or none at all
* Just don't plagiarise other candidates tests

## Things we look for in solutions

* **Problem solving** - Proof of ability to solve problems in an efficient way
* **Maintainability** - Code that is easy to understand and change
* **Extensibility** - Code that takes future growth in to account such as potential new functionality

**Impress us!**

## Notes

* There is a max limit of 100 games per request to the twitch.tv API
* Endpoint documentation: https://github.com/justintv/Twitch-API/blob/master/v3_resources/games.md#get-gamestop

## Questions

Feel free to ask us any questions
