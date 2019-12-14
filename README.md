# Galaubackup

<img src="https://steamuserimages-a.akamaihd.net/ugc/775103339588109595/7DCF3FC0B7CF627C56BB6FD073DB01A691E938E8/">

## How to use
1. put this Galaubackup.php to `libraries` directory
2. load library in the construct

```php
$this->load->library('galaubackup');
```
3. call method backup in controller

```php
$this->galaubackup->backup();
```
4. backup result stored in your-project/assets/backup/backup-on-DATE.sql

## Run with cron job 
1. crontab -e
2. 0 0 * * * php `directory to your project/index.php your-controller.php`(e.g run every midnight)

## Tips 
useful online tool for cron schedule expressions
https://crontab.guru/
