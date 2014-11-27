<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A Umass Lowell Computer Science Student 91.461 Assignment: Creating
     *      Styling Your First Web Page With CSS
     *
     *  This file holds the content for the assignment 3. The assignment
     *  file has had its extension modified to work as a PHP file to
     *  allow for header redirects from unwanted access as well as to
     *  allow for dynamic includes as the css and image locations are not
     *  hard coded as they originally were. This assignments purpose is to
     *  show knowledge of text styling with css, So I have created a quick
     *  tutorial on how to format text.
     *
     *  9/10/14 Modified HTML to work as PHP
     */

    //  Define guard preventsaccess unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Validation assignment</title>

        <style type="text/css">
            label {
                float:left ;
                text-transform: uppercase;
            }
            label.left {
                width: 200px;
                text-align: right ;
                margin-right: 5px;
            }
            label.append {
                text-transform: capitalize;
                margin-left: 5px;
            }
            label.full { width: 100%; }

            label.left,
            label.full {
                padding: 5px;
                line-height: 20px;
                height: 20px;
            }

            input { float: left; }
            input[type='text'] ,
            input[type='password'] {
                width: 300px;
                padding: 5px;
            }

            input[type='radio'] {}
            input[type='checkbox'] {}
            textarea {}
            select {}

            span.entry {
                float: left;
                width: 100%;
                margin-bottom: 10px;
            }
            span.message {
                float: left;
                margin-left: 200px;
                width: 100%;
                margin-left: 215px ;
            }
            button {
                float: left;
            }

        </style>
    </head>
    <body>
        <form>

            <span class="entry">
                <label class="left">name</label>
                <input type="text" id="register-name" name="register-name" />

                <span class="message">
                    please type your name.
                </span>
            </span>

            <span class="entry">
                <label class="left">e-mail address</label>
                <input type="text" id="register-email" name="register-email" />

                <span class="message">
                    please supply an email address.
                </span>
            </span>

            <span class="entry">
                <label class="left">password</label>
                <input type="password" id="register-pw1" name="register-pw1" />

                <span class="message">
                    please type a password.
                </span>
            </span>

            <span class="entry">
                <label class="left">confirm password</label>
                <input type="password" id="register-pw2" name="register-pw2" />

                <span class="message">
                </span>
            </span>

            <span class="entry">
                <label class="left">hobbies</label>

                <input type="checkbox" id="register-heli-skiing" name="register-heli-skiing" />
                <label class="append">heli-skiing</label>

                <input type="checkbox" id="register-pickle-eating" name="register-pickle-eating" />
                <label class="append">pickle eating</label>

                <input type="checkbox" id="register-walnut-butter" name="register-walnut-butter" />
                <label class="append">making walnut butter</label>

                <span class="message">
                    please check at least 1 hobby.
                </span>
            </span>

            <span class="entry">
                <label class="left">date of birth</label>
                <input type="text" id="register-dob" name="register-dob" />

                <span class="message">
                </span>
            </span>

            <span class="entry">
                <label class="left">planet of birth</label>
                <select id="register-planet" name="register-planet">
                    <option value="null">-- Please Select One --</option>
                </select>

                <span class="message">
                    please choose a planet.
                </span>
            </span>

            <span class="entry">
                <label class="left">comments</label>
                <textarea id="register-comment" name="register-comment"></textarea>

                <span class="message">
                </span>
            </span>

            <span class="entry">
                <label class="full">would you like to recieve annoying e-mail from us?</label>

                <input type="radio" id="register-email-radio-1" name="register-email-radio" value="true"/>
                <label class="append">yes</label>

                <input type="radio" id="register-email-radio-2" name="register-email-radio" value="true"/>
                <label class="append">Definitely</label>

                <input type="radio" id="register-email-radio-3" name="register-email-radio" value="true"/>
                <label class="append">Do I have a choice?</label>

                <span class="message">
                    please select an option
                </span>
            </span>

            <span class="entry">
                <label class="left"></label>
                <button type="submit" id="register-submit" name="register-submit">
                    Submit
                </button>
            </span>

        </form>
    </body>
</html>
