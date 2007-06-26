<?php
/**
 * MyBB 1.2
 * Copyright � 2007 MyBB Group, All Rights Reserved
 *
 * Website: http://www.mybboard.net
 * License: http://www.mybboard.net/license.php
 *
 * $Id$
 */

$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (1, 'Zip File', 'application/zip', 'zip', 1024, 'images/attachtypes/zip.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (2, 'JPEG Image', 'image/jpeg', 'jpg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (3, 'Text Document', 'text/plain', 'txt', 200, 'images/attachtypes/txt.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (4, 'GIF Image', 'image/gif', 'gif', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (6, 'PHP File', 'application/octet-stream', 'php', 500, 'images/attachtypes/php.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (7, 'PNG Image', 'image/png', 'png', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (8, 'Microsoft Word Document', 'application/msword', 'doc', 1024, 'images/attachtypes/doc.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (9, '', 'application/octet-stream', 'htm', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (10, '', 'application/octet-stream', 'html', 100, 'images/attachtypes/html.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (11, '', 'image/jpeg', 'jpeg', 500, 'images/attachtypes/image.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (12, '', 'application/x-gzip', 'gz', 1024, 'images/attachtypes/tgz.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (13, '', 'application/x-tar', 'tar', 1024, 'images/attachtypes/tar.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (14, '', 'text/css', 'css', 100, 'images/attachtypes/css.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (15, '', 'application/pdf', 'pdf', 2048, 'images/attachtypes/pdf.gif');";
$inserts[] = "INSERT INTO mybb_attachtypes (atid, name, mimetype, extension, maxsize, icon) VALUES (16, '', 'image/bmp', 'bmp', 500, 'images/attachtypes/image.gif');";

$inserts[] = "INSERT INTO mybb_calendars (name,disporder,startofweek,showbirthdays,eventlimit,moderation,allowhtml,allowmycode,allowimgcode,allowsmilies) VALUES ('Default Calendar',1,0,1,4,0,'no','yes','yes','yes');";

$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (1, 'My Category', '', '', 'c', 0, '1', 1, 'yes', 'yes', 0, 0, 0, '0', 0, 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 1, 'yes', '', 'yes', 'no', 'no', 'no', 0, 'no', 0, '', '');";
$inserts[] = "INSERT INTO mybb_forums (fid, name, description, linkto, type, pid, parentlist, disporder, active, open, threads, posts, lastpost, lastposter, lastposttid, allowhtml, allowmycode, allowsmilies, allowimgcode, allowpicons, allowtratings, status, usepostcounts, password, showinjump, modposts, modthreads, modattachments, style, overridestyle, rulestype, rulestitle, rules) VALUES (2, 'My Forum', '', '', 'f', 1, '1,2', 1, 'yes', 'yes', 0, 0, 0, '0', 0, 'no', 'yes', 'yes', 'yes', 'yes', 'yes', 1, 'yes', '', 'yes', 'no', 'no', 'no', 0, 'no', 0, '', '');";

$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (1, 1, 'User Registration', 'Perks and privileges to user registration.', 'Some parts of this forum may require you to be logged in and registered. Registration is free and takes a few minutes to complete.<br />\r\n<br />\r\nYou are encouraged to register; once you register you will be able to post messages, set your own preferences, and maintain a profile.<br />\r\n<br />\r\nSome of the features that generally require registration are subscriptions, favorites, changing of styles, accessing of your Personal Pad (simple notepad) and emailing forum members.', 'yes', 'yes', 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (2, 1, 'Updating Profile', 'Changing your data currently on record.', 'At some point during your stay, you may decide you need to update some information such as your instant messenger information, your password, or perhaps you need to change your email address. You may change any of this information from your user control panel. To access this control panel, simply click on the link in the upper right hand corner of most any page entitled \"user cp\". From there, simply choose \"Edit Profile\" and change or update any desired items, then proceed to click the submit button located at the bottom of the page for changes to take effect.', 'yes', 'yes', 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (3, 1, 'Use of Cookies on myBB', 'myBB uses cookies to store certain information about your registration.', 'myBulletinBoard makes use of cookies to store your login information if you are registered, and your last visit if you are not.<br />\r\n<br />\r\nCookies are small text documents stored on your computer; the cookies set by this forum can only be used on this website and pose no security risk.<br />\r\n<br />\r\nCookies on this forum also track the specific topics you have read and when you last read them.<br />\r\n<br />\r\nTo clear all cookies set by this forum, you can click <a href=\"misc.php?action=clearcookies\">here</a>.', 'yes', 'yes', 3);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (4, 1, 'Logging In and Out', 'How to login and logout.', 'When you login, you set a cookie on your machine so that you can browse the forums without having to enter in your username and password each time. Logging out clears that cookie to ensure nobody else can browse the forum as you.<br />\r\n<br />\r\nTo login, simply click the login link at the top right hand corner of the forum. To logout, click the logout link in the same place. In the event you cannot logout, clearing cookies on your machine will take the same effect.', 'yes', 'yes', 4);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (5, 2, 'Posting a New Topic', 'Starting a new thread in a forum.', 'When you go to a forum you are interested in and you wish to create a new topic (or thread), simply choose the button at the top and bottom of the forums entitled \"New topic\". Please take note that you may not have permission to post a new topic in every forum as your administrator may have restricted posting in that forum to staff or archived the forum entirely.', 'yes', 'yes', 1);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (6, 2, 'Posting a Reply', 'Replying to a topic within a forum.', 'During the course of your visit, you may encounter a thread to which you would like to make a reply. To do so, simply click the \"Post reply\" button at the bottom or top of the thread. Please take note that your administrator may have restricted posting to certain individuals in that particular forum.<br />\r\n<br />\r\nAdditionally, a moderator of a forum may have closed a thread meaning that users cannot reply to it. There is no way for a user to open such a thread without the help of a moderator or administrator.', 'yes', 'yes', 2);";
$inserts[] = "INSERT INTO mybb_helpdocs (hid, sid, name, description, document, usetranslation, enabled, disporder) VALUES (7, 2, 'myCode', 'Learn how to use myCode to enhance your posts.', 'You can use myCode, a simplified version of HTML, in your posts to create certain effects.\r\n<p><br />\r\n[b]This text is bold[/b]<br />\r\n&nbsp;&nbsp;&nbsp;<b>This text is bold</b>\r\n<p>\r\n[i]This text is italicized[/i]<br />\r\n&nbsp;&nbsp;&nbsp;<i>This text is italicized</i>\r\n<p>\r\n[u]This text is underlined[/u]<br />\r\n&nbsp;&nbsp;&nbsp;<u>This text is underlined</u>\r\n<p><br />\r\n[url]http://www.example.com/[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.example.com/\">http://www.example.com/</a>\r\n<p>\r\n[url=http://www.example.com/]Example.com[/url]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"http://www.example.com/\">Example.com</a>\r\n<p>\r\n[email]example@example.com[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">example@example.com</a>\r\n<p>\r\n[email=example@example.com]E-mail Me![/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com\">E-mail Me!</a>\r\n<p>\r\n[email=example@example.com?subject=spam]E-mail with subject[/email]<br />\r\n&nbsp;&nbsp;&nbsp;<a href=\"mailto:example@example.com?subject=spam\">E-mail with subject</a>\r\n<p><br />\r\n[quote]Quoted text will be here[/quote]<br />\r\n&nbsp;&nbsp;&nbsp;<quote>Quoted text will be here</quote>\r\n<p>\r\n[code]Text with preserved formatting[/code]<br />\r\n&nbsp;&nbsp;&nbsp;<code>Text with preserved formatting</code>\r\n<p><br />\r\n[img]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\">\r\n<p>\r\n[img=50x50]http://www.php.net/images/php.gif[/img]<br />\r\n&nbsp;&nbsp;&nbsp;<img src=\"http://www.php.net/images/php.gif\" width=\"50\" height=\"50\">\r\n<p><br />\r\n[color=red]This text is red[/color]<br />\r\n&nbsp;&nbsp;&nbsp;<font color=\"red\">This text is red</font>\r\n<p>\r\n[size=3]This text is size 3[/size]<br />\r\n&nbsp;&nbsp;&nbsp;<font size=\"3\">This text is size 3</font>\r\n<p>\r\n[font=Tahoma]This font is Tahoma[/font]<br />\r\n&nbsp;&nbsp;&nbsp;<font face=\"Tahoma\">This font is Tahoma</font>\r\n<p><br />\r\n[align=center]This is centered[/align]<div align=\"center\">This is centered</div>\r\n<p>\r\n[align=right]This is right-aligned[/align]<div align=\"right\">This is right-aligned</div>\r\n<p><br />\r\n[list]<br />\r\n[*]List Item #1<br />\r\n[*]List Item #2<br />\r\n[*]List Item #3<br />\r\n[/list]<br />\r\n<ul>\r\n<li>List item #1</li>\r\n<li>List item #2</li>\r\n<li>List Item #3</li>\r\n</ul><p><font size=1>You can make an ordered list by using [list=1] for a numbered, and [list=a] for an alphabetical list.</size>', 'yes', 'yes', 3);";

$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (1, 'User Maintenance', 'Basic instructions for maintaining a forum account.', 'yes', 'yes', 1);";
$inserts[] = "INSERT INTO mybb_helpsections (sid, name, description, usetranslation, enabled, disporder) VALUES (2, 'Posting', 'Posting, replying, and basic usage of forum.', 'yes', 'yes', 2);";

$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (1, 'MyBB', 'images/icons/my.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (2, 'Exclamation', 'images/icons/exclamation.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (3, 'Question', 'images/icons/question.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (4, 'Smile', 'images/icons/smile.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (5, 'Sad', 'images/icons/sad.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (6, 'Wink', 'images/icons/wink.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (7, 'Cool', 'images/icons/cool.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (8, 'Big Grin', 'images/icons/biggrin.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (9, 'Tongue', 'images/icons/tongue.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (10, 'Roll Eyes', 'images/icons/rolleyes.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (11, 'Shy', 'images/icons/shy.gif');";
$inserts[] = "INSERT INTO mybb_icons (iid, name, path) VALUES (12, 'At', 'images/icons/at.gif');";

$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (1, 'Location', 'Where in the world do you live?', 1, 'text', 0, 255, 'no', 'yes', 'no');";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (2, 'Bio', 'Enter a few short details about yourself, your life story etc.', 2, 'textarea', 0, 0, 'no', 'yes', 'no');";
$inserts[] = "INSERT INTO mybb_profilefields (fid, name, description, disporder, type, length, maxlength, required, editable, hidden) VALUES (3, 'Sex', 'Please select your sex from the list below.', 0, 'select\nUndisclosed\nMale\nFemale\nOther', 0, 0, 'no', 'yes', 'no');";

$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (1, 'Smile', ':)', 'images/smilies/smile.gif', 1, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (2, 'Wink', ';)', 'images/smilies/wink.gif', 2, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (3, 'Cool', ':cool:', 'images/smilies/cool.gif', 3, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (4, 'Big Grin', ':D', 'images/smilies/biggrin.gif', 4, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (5, 'Tongue', ':P', 'images/smilies/tongue.gif', 5, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (6, 'Rolleyes', ':rolleyes:', 'images/smilies/rolleyes.gif', 6, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (7, 'Shy', ':shy:', 'images/smilies/shy.gif', 7, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (8, 'Sad', ':(', 'images/smilies/sad.gif', 8, 'yes');";
$inserts[] = "INSERT INTO mybb_smilies (sid, name, find, image, disporder, showclickable) VALUES (9, 'At', ':at:', 'images/smilies/at.gif', 9, 'no');";

$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('GoogleBot','google');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Lycos','lycos');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Ask Jeeves','ask jeeves');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Hot Bot','slurp@inktomi');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('What You Seek','whatuseek');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Archive.org','is_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Altavista','scooter');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Alexa','ia_archiver');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('MSN Search','msnbot');";
$inserts[] = "INSERT INTO mybb_spiders (name,useragent) VALUES ('Yahoo!','yahoo slurp');";

$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('1','calendar','<lang:group_calendar>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('2','editpost','<lang:group_editpost>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('3','email','<lang:group_email>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('4','emailsubject','<lang:group_emailsubject>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('5','forumbit','<lang:group_forumbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('6','forumjump','<lang:group_forumjump>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('7','forumdisplay','<lang:group_forumdisplay>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('8','index','<lang:group_index>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('9','error','<lang:group_error>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('10','memberlist','<lang:group_memberlist>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('11','multipage','<lang:group_multipage>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('12','private','<lang:group_private>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('13','portal','<lang:group_portal>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('14','postbit','<lang:group_postbit>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('15','redirect','<lang:group_redirect>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('16','showthread','<lang:group_showthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('17','usercp','<lang:group_usercp>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('18','online','<lang:group_online>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('19','moderation','<lang:group_moderation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('20','nav','<lang:group_nav>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('21','search','<lang:group_search>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('22','showteam','<lang:group_showteam>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('23','reputation','<lang:group_reputation>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('24','newthread','<lang:group_newthread>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('25','newreply','<lang:group_newreply>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('26','member','<lang:group_member>');";
$inserts[] = "INSERT INTO mybb_templategroups (gid,prefix,title) VALUES ('27','warning','<lang:group_warning>');";

$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (1, 0, 'Newbie', 1, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (2, 1, 'Junior Member', 2, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (3, 50, 'Member', 3, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (4, 250, 'Senior Member', 4, '');";
$inserts[] = "INSERT INTO mybb_usertitles (utid, posts, title, stars, starimage) VALUES (5, 750, 'Posting Freak', 5, '');";

?>