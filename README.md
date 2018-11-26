## About
This is the Chinese language package of phpBB3.X maintained by [phpbbchina.com](http://www.phpbbchina.com), delivered with the auto-packaging scripts.  
The Chinese (Simplified & Traditional) language packages of phpBB3 were initially translated by the team of [phpbbchina.com](http://www.phpbbchina.com) from Jun 2007, through 3.0.0-RC2 to 3.0.7-pl1.  
The translation work was restarted since 3.2.4.

## How can I use them?

I assume that you already have a working workspace with Git, PHP5.6+, OpenCC installed.
Check out the source code to your local machine
```bash
git clone --recursive https://github.com/MiltonLai/phpbb3-lang-chinese.git
```
switch to specific tag, e.g. release-3.2.4
```bash
git fetch --all --tags --prune
git checkout release-3.2.4
```   
then execute
```bash
bin/build.sh
```

Now you will be able to see the building process, which will take several minutes or longer, depending on your internet connection speed. When all stages are done, you will find the compressed packages under `build/` folder.

## Installation

Installation userguide can be found at [phpBB Docs](https://www.phpbb.com/support/docs/en/)

## Support

If you find anything wrong during the buidling, please fire a bug in Github.  

If you have any questions regarding the Chinese translations and customizations, please post on [phpbbchina.com](http://www.phpbbchina.com).  

For general questions, find support on [phpBB.com](https://www.phpbb.com).   


## Copyright And License

All the translatios in this project are done by [phpbbchina.com](http://www.phpbbchina.com).  
Copyright(c) 2018 [phpbbchina.com](http://www.phpbbchina.com) All Rights Reserved.  This software is licensed under
[GNU General Public License v2](http://opensource.org/licenses/gpl-2.0.php)  

## Contributors

Thanks goes to:  
_IOsetting  
newerby  
CRLin  
土老耄  
laokan  
makara_  
@BYVoid for the great ST converting tool


