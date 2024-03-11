@block @block_comments
Feature: Enable Block comments on a course page and view comments
  In order to enable the comments block on a course page
  As a teacher
  I can add the comments block to the course page

  Scenario: Add the comments block on the course page and add comments
    Given the following "courses" exist:
      | fullname | shortname | category |
      | Course 1 | C1 | 0 |
    And the following "users" exist:
      | username | firstname | lastname | email |
      | teacher1 | Teacher | Frist | teacher1@example.com |
      | student1 | Student | First | student1@example.com |
    And the following "course enrolments" exist:
      | user | course | role |
      | teacher1 | C1 | editingteacher |
      | student1 | C1 | student |
    And the following "blocks" exist:
      | blockname | contextlevel | reference | pagetypepattern | defaultregion |
      | comments  | Course       | C1        | course-view-*   | side-pre      |
    And I am on the "Course 1" course page logged in as teacher1
    And I follow "Show comments"
    And I add "I'm a comment from the teacher" comment to comments block
    When I am on the "Course 1" course page logged in as student1
    And I follow "Show comments"
    Then I should see "I'm a comment from the teacher"
