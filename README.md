# LBR Laravel Technical Exercise

We would like you to create a small web app for a minimalist blog front end.

We have provided an sql script for a database below. Feel free to run it in to create a database or to recreate an equivalent database if you prefer.

Our standard stack is:

* PHP with Laravel 6+
* Vue.JS
* MariaDB

Feel free to use any other technologies if you prefer them or are not familiar with the above, but these are the technologies you will use if you work with us.

Think about the structure and maintainability of the code and prioritise satisfying the user stories rather than attempting to build a complete solution.

This exercise should take no longer than 2 hours. When complete, plase submit a pull/merge request via this GitHub repository.

## User stories

**As a** reader of the blog  
**I want** see a list of the titles of all of the available blog posts  
**So that** I can choose which post to read

**As a** reader of the blog  
**I want** see the number of comments each post has in the list  
**So that** I can get a feel for how intersting the post is

**As a** reader of the blog  
**I want** be able to click on a post in the list to view the post  
**So that** I can read the full post

## SQL Script

```
CREATE TABLE `BlogSite`.`BlogPosts` (
  `BlogPostID`  INT UNSIGNED    NOT NULL AUTO_INCREMENT,
  `Title`       VARCHAR(255)    NOT NULL,
  `Body`        MEDIUMTEXT      NOT NULL,
  `PublishedOn` DATETIME        NOT NULL DEFAULT NOW(),
  PRIMARY KEY (`BlogPostID`)
);

CREATE TABLE `BlogSite`.`BlogComment` (
    `CommentID`   INT UNSIGNED  NOT NULL AUTO_INCREMENT,
    `BlogPostID`  INT UNSIGNED  NOT NULL,
    `Comment`     MEDIUMTEXT    NOT NULL,
    `CommentedOn` DATETIME      NOT NULL DEFAULT NOW(),
    PRIMARY KEY (`CommentID`),
    CONSTRAINT `FK_BlogComment_Blog` FOREIGN KEY (`BlogPostID`) REFERENCES `blogposts` (`BlogPostID`) ON UPDATE NO ACTION ON DELETE NO ACTION
);

INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (1, N'How to bake a cake', N'<p>Blog body</p>', CAST(N'2020-02-01' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (2, N'How to bake cookies', N'<p>Blog body</p>', CAST(N'2020-02-14' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (3, N'How to bake bread', N'<p>Blog body</p>', CAST(N'2020-02-25' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (4, N'How to make custard', N'<p>Blog body</p>', CAST(N'2020-03-10' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (5, N'The joys of raisins', N'<p>Blog body</p>', CAST(N'2020-03-16' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (6, N'Making pizza dough', N'<p>Blog body</p>', CAST(N'2020-03-28' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (7, N'To kneed, or not to kneed, that is the question', N'<p>Blog body</p>', CAST(N'2020-04-04' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (8, N'Is Bake Off better on Channel 4?', N'<p>Blog body</p>', CAST(N'2020-04-21' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (9, N'The perfect Victoria Sponge', N'tes', CAST(N'2020-03-01' AS DATETIME));
INSERT `BlogSite`.`BlogPosts` (`BlogPostID`, `Title`, `Body`, `PublishedOn`) VALUES (10, N'How to make a croissant', N'test', CAST(N'2020-02-01' AS DATETIME));

INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (1, 2, N'These are great cookies.', CAST(N'2020-02-14 18:42:44.158' AS DATETIME));
INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (2, 6, N'Fairly average dough.', CAST(N'2020-04-08 11:56:21.136' AS DATETIME));
INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (3, 2, N'Yummy cookies.', CAST(N'2020-03-08 10:25:35.215' AS DATETIME));
INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (4, 4, N'My custard was lumpy.', CAST(N'2020-04-08 08:56:12.109' AS DATETIME));
INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (5, 7, N'Comment body', CAST(N'2020-05-10 11:21:08.112' AS DATETIME));
INSERT `BlogSite`.`BlogComment` (`CommentID`, `BlogPostID`, `Comment`, `CommentedOn`) VALUES (6, 1, N'Comment body', CAST(N'2020-02-21 11:46:18.147' AS DATETIME));

```
