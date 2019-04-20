<html>
    <head>
        <title>FORMS</title>
    </head>
    <body>
       <?php
            if(isset($_POST['submit'])){
                if(empty($_POST['user'])){
                    echo "Required";
                }elseif(strlen($_POST['submit'])< 5){
                    echo "FIELD MUST NE BIG IN FIVE";
                }elseif(strlen($_POST['submit'])< 11){
                    echo "FIELD MUST NE SMALL IN TEN";
                }
            }
        ?>
       
        <form action="" method="post">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="user"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="submit" value="send"></td>
                </tr>
            </table>
        </form>
        
        <?php /*
            CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli
$ git init
Initialized empty Git repository in E:/xampp/htdocs/oli/.git/

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git remote add origin https://github.com/Taiyob/ctg.git

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git remote -v
origin  https://github.com/Taiyob/ctg.git (fetch)
origin  https://github.com/Taiyob/ctg.git (push)

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git status
On branch master

No commits yet

Untracked files:
  (use "git add <file>..." to include in what will be committed)

        Git-2.21.0-64-bit.exe
        hw/
        index.php
        new.php
        php.php
        php/

nothing added to commit but untracked files present (use "git add" to track)

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git add .

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git commit -am "new file added"

*** Please tell me who you are.

Run

  git config --global user.email "you@example.com"
  git config --global user.name "Your Name"

to set your account's default identity.
Omit --global to set the identity only in this repository.

fatal: unable to auto-detect email address (got 'CTBD@DESKTOP-4O5T30I.(none)')

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master)
$ git remote -v
origin  https://github.com/Taiyob/ctg.git (fetch)
origin  https://github.com/Taiyob/ctg.git (push)

CTBD@DESKTOP-4O5T30I MINGW64 /e/xampp/htdocs/oli (master) */

        ?>
       
        
        
        
        
        
        
        
        
    </body>
</html>