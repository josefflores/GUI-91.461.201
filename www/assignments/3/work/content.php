<?php
    /**
     *  @file   content.php
     *  @author Jose F. Flores <jose_flores@student.uml.edu>
     *
     *  Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
     *      freely copied or excerpted for educational purposes with credit
     *      to the author.
     *
     *  A UMass Lowell Computer Science Student 91.461 Assignment: Creating
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

    //  Define guard prevents access unless from the index.php file at
    //  this level
    if ( !defined( 'CONTENT_GUARD' ) )
        header( 'Location: ./' ) ;

    // Content begin
?>

<!DOCTYPE html> <!-- Document type declaration for HTML5-->

<!-- Start of HTML, language of document is English -->
<html lang="en">

    <head>

        <!-- Document is utf-8 -->
        <meta charset="utf-8">

        <!--
            File: index.html
            91.461 Assignment: Creating Your First Web Page
            Jose F. Flores, UMass Lowell Computer Science Student
                jose_flores@student.uml.edu
            Copyright (c) 2014 by Jose F. Flores. All rights reserved. May be
                freely copied or excerpted for educational purposes with credit
                to the author.

            updated by JFF on September 9, 2014 at 13:30
                Updated web page comments
            updated by JFF on September 5, 2014 at 14:00
                Created Web page
            updated by JFF on September 4, 2014 at 14:00
                Added header comment
        -->

        <!-- Setting the page title-->
        <title>
            GUI Programming I
        </title>

        <!-- Adding link to Assignment 3 css stylesheet file, This file has the styling for the example elements-->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>assignment3.css">
        <!-- Adding link to main css style sheet file -->
        <link type="text/css" rel="stylesheet" href="<?php echo $A[ 'W_CSS' ] ; ?>main.css">



    </head>

    <body>

        <!--
            Begin page wrapper, the wrapper will allow for future
            positional modifications in page layout such as centering.
        -->
        <div class="wrapper">

            <!-- Start header -->
            <div class="header">

                <!--
                    Begin wrapper, this wrapper allows for the whole
                    header to be positioned as an item while maintaining
                    a full header bar.
                -->
                <div class="title-wrapper">

                    <!-- logo -->
                    <img class="logo" src="<?php echo $A[ 'W_IMG' ] ; ?>mouse.png" alt="Page Logo">

                    <div class="header-right" >

                        <!-- Title of the page -->
                        <h1 class="title">
                            91.461 GUI Programming I
                        </h1>

                        <!-- Subtitle description -->
                        <h2 class="title-sub">
                            Fall 2014 Semester, Section 201
                        </h2>

                    </div>

                    <!-- Navigation menu -->
                    <nav class="horizontal">

                        <ul>

                            <li>

                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/3/' ; ?>">
                                    Instructions
                                </a>

                            </li>

                            <li>
                                <a href="<?php echo $A[ 'W_ROOT' ] ; echo 'assignments/3/work/' ; ?>">
                                    Work
                                </a>
                            </li>

                        </ul>

                    </nav>
                <!-- End header wrapper-->
                </div>

            <!-- End header -->
            </div>


            <!-- Begin content -->
            <div class="content">

                <!-- The meat of the assignment -->
                <img class="description" src="<?php echo $A[ 'W_IMG' ] ; ?>assignment.png" alt="assignment logo" >
                <div class="description" >
                    <h3>
                        Assignment 3
                    </h3>
                    <h4 class="info">
                        Text Formatting
                    </h4>
                    <p>
                        This assignment is focused on how to manipulate text with css.
                    </p>
                </div>

                <!-- Explaining the elements to be used -->
                <div class="description" >
                    <h3>
                        Elements
                    </h3>
                    <h4 class="info">
                        Common text containers
                    </h4>

                    <br/>

                    <h5>
                        Headings
                    </h5>

                    <!-- Explaining Headings -->
                    <p>
                        Heading tags range from h1 to h6, these tags are used to format text headings and are to be used sequentially; an h1 tag proceeds an h2 tag, an h2 tag precedes an h3 tag, and so on. These tags are used to describe the information under them and can be precursors to other elements; the following element&apos;s content should fall under the category described by the preceding headings.
                    </p>

                    <!-- h1 example -->
                    <div class="code">
                        <h1 class="example-1">
                        &lt;h1&gt; Heading 1 - The top level heading, usually reserved for a title. &lt;/h1&gt;
                        </h1>
                    </div>

                    <!-- h2 example -->
                    <div class="code">
                        <h2 class="example-1">
                            &lt;h2&gt; Heading 2 - The second largest heading, usually reserved for a sub-title or a description of the preceding title. &lt;/h2&gt;
                        </h2>
                    </div>

                    <!-- h3 example -->
                    <div class="code">
                        <h3 class="example-1">
                            &lt;h3&gt; Heading 3 - The third largest heading. &lt;/h3&gt;
                        </h3>
                    </div>

                    <!-- h4 example -->
                    <div class="code">
                        <h4 class="example-1">
                            &lt;h4&gt; Heading 4 - The fourth largest heading. &lt;/h4&gt;
                        </h4>
                    </div>

                    <!-- h5 example -->
                    <div class="code">
                        <h5 class="example-1">
                            &lt;h5&gt; Heading 5 - The fifth largest heading. &lt;/h5&gt;
                        </h5>
                    </div>

                    <!-- h6 example -->
                    <div class="code">
                        <h6 class="example-1">
                            &lt;h6&gt; Heading 6 - The smallest heading. &lt;/h6&gt;
                        </h6>
                    </div>

                    <!-- explaining paragraphs -->
                    <h5>
                        Paragraphs
                    </h5>
                    <!-- lipsum content taken from http://www.lipsum.com/ -->
                    <p>
                        Paragraph tags are used to contain organized sections of text, they will wrap text by default.
                    </p>

                    <!-- paragraph example -->
                    <div class="code">
                        <p class="example-1">
                            &lt;p&gt; I am a a little paragraph I will have a bunch of gibberish as a my content. Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularized in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum &lt;/p&gt;
                        </p>
                    </div>

                    <!-- explaining span em and strong -->
                    <h5>
                        Spans, Emphasis and Strong
                    </h5>
                    <p>
                        Span tags are used to mark sections of text within a parent so that these sections of text can then be formatted differently. They have no initial formatting and can be used to just segregate subsections of text.
                    </p>

                    <!-- span example -->
                    <div class="code">
                        <p class="example-1">
                            &lt;p&gt; Text inside a &lt;span&gt;
                            <span class="example-1">
                                parent to be formatted
                            </span>
                            &lt;/span&gt; differently. &lt;/p&gt;
                        </p>
                    </div>

                    <p>
                        Emphasis tags are meant to give a selection of text emphasis, its purpose is to make the contained text stand out, it&apos;s default formatting makes it italicized.
                    </p>

                    <!-- em example -->
                    <div class="code">
                        <p class="example-1">
                            &lt;p&gt; Text inside a parent to be formatted for &lt;em&gt;
                            <em class="example-1">
                                emphasis.
                            </em>
                            &lt;/em&gt; &lt;/p&gt;
                        </p>
                    </div>

                    <p>
                        Strong tags are used to give weight to a selection of text, this tag is commonly associated with being bold.
                    </p>

                    <!-- strong example -->
                    <div class="code">
                        <p class="example-1" >
                            &lt;p&gt; Text inside a parent that needs to carry &lt;strong&gt;
                            <strong class="example-1">
                                more weight.
                            </strong>
                            &lt;/strong&gt; &lt;/p&gt;
                        </p>
                    </div>

                </div>

                <!-- Formatting Elements -->
                <div class="description" >
                    <h3>
                        Example Styling
                    </h3>
                    <h4>
                        Styling the Common text containers
                    </h4>

                    <br/>

                    <!-- restore formatting with css to initial values assignment3.css-->
                    <h5>
                        Before
                    </h5>

                    <p>
                        This section will show how the previous tags found under Elements look by default on your browser.
                    </p>

                    <!-- original browser rendering of h1 -->
                    <div class="sample">
                        <h1 class="example-1">
                            Content Title h1 tag
                        </h1>
                    </div>

                    <!-- original browser rendering of h2 -->
                    <div class="sample">
                        <h2 class="example-1">
                            Topic Title h2
                        </h2>
                    </div>

                    <!-- original browser rendering of h3 -->
                    <div class="sample">
                        <h3 class="example-1">
                            Subheading h3 tag
                        </h3>
                    </div>

                    <!-- original browser rendering of spans -->
                    <div class="sample">
                        <p class="example-1">
                            I am writing this paragraph to show how we use span tags to change subsections. I will use the span tag to highlight the words

                            <span>
                                highlight
                            </span>
                            and
                            <span>
                                hide
                            </span>.
                            I will also use the span tag to change how a
                            <span>
                                title
                            </span>
                            is presented.
                        </p>
                    </div>

                    <!-- original browser rendering of em -->
                    <div class="sample">
                        <p class="example-1">
                            An emphasis tag is used for expressing a different pronunciation. This paragraph will be used to describe how an emphasis tag should be used with the example of a new English speaker who mispronounced their words when they said &quot; I had
                            <em>
                                read
                            </em>
                            my book. &quot;.
                        </p>
                    </div>

                    <!-- original browser rendering of strong -->
                    <div class="sample">
                        <p class="example-1">
                            If everyday speech was being used in a paragraph a strong element would describe a scream.
                        </p>
                        <blockquote class="example-1">
                            &quot; Oh my God, the house is on
                            <strong>
                                fire
                            </strong>
                            ! &quot;
                        </blockquote>
                    </div>

                    <!-- Show ways to style for meaning assignment3.css -->
                    <h5>
                        After
                    </h5>

                    <p>
                        This section know shows the same markup with modified styles.
                    </p>

                    <!-- browser rendering of modified h1, this h1 uses comic sans a joke font in most applications-->
                    <div class="sample">
                        <h1 class="example-2">
                            Content Title h1 tag
                        </h1>
                    </div>

                    <!-- browser rendering of modified h2, this h2 is displayed bold and in Impact font-->
                    <div class="sample">
                        <h2 class="example-2">
                            Topic Title h2 displayed bold and in a different font than the h1 above. Oh by the way never use comic sans like above its a designer joke.
                        </h2>
                    </div>

                    <!-- browser rendering of modified h3, this h3 uses the default font but is also bold-->
                    <div class="sample">
                        <h3 class="example-2">
                            Subheading h3 tag strengthening the use of a word with font-weight: bold;
                        </h3>
                    </div>

                    <!-- describing span usage -->
                    <div class="sample">
                        <p class="example-2">
                            I am writing this paragraph to show how we use span tags to change subsections. I will use the span tag to highlight the words

                            <!-- browser rendering of modified span class this class makes text highlighted as if by a yellow highlighter-->
                            <span class="highlight">
                                highlight
                            </span>
                            and

                            <!-- browser rendering of modified span class this class makes text covered up by a white box-->
                            <span class="hide">
                                hide
                            </span>.
                            I will also use the span tag to change how a

                            <!-- browser rendering of modified span class this class makes text look like a title typed from a typewriter -->
                            <span class="type">
                                title
                            </span>
                            is presented.
                        </p>
                    </div>

                    <!-- describing emphasis -->
                    <div class="sample">
                        <p class="example-2">
                            An emphasis tag is used for expressing a different pronunciation. This paragraph will be used to describe how an emphasis tag should be used with the example of a new English speaker who mispronounced their words when they said &quot; I had
                            <!-- browser rendering of modified em class this class makes text stand out to signify a mistake -->
                            <em class="mistake">
                                read
                            </em>
                            my book. &quot;.
                        </p>
                    </div>

                    <!-- describing a scream with strong -->
                    <div class="sample">
                        <p class="example-2">
                            If everyday speech was being used in a paragraph a strong element would describe a scream.
                        </p>

                        <!-- used to show speech -->
                        <blockquote class="example-2">
                            &quot; Oh my God, the house is on

                            <!-- browser rendering of modified strong class this class makes text stand out and gives weight to what is being screamed-->
                            <strong class="yell">
                                fire
                            </strong>
                            ! &quot;
                        </blockquote>
                    </div>

                </div>
            <!-- End content -->
            </div>

            <!-- Begin footer with page information-->
            <div class="footer">

                <!-- Wrapper to allow for centering -->
                <div class="footer-wrapper">

                    <!-- Copyright statement -->
                    <div class="copyright">
                        Copyright &copy; 2014 by Jose F. Flores. All rights reserved
                    </div>

                    <!-- Github link where versioning code is being stored -->
                    <div class="notice">
                        <a href="https://github.com/josefflores/GUI-91.461.201">
                            Github Repository
                        </a>
                    </div>

                <!-- End wrapper -->
                </div>

            <!-- End footer -->
            </div>

        <!-- End page wrapper -->
        </div>

    <!-- End of body -->
    </body>

<!-- End of HTML document -->
</html>
