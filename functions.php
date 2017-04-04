<?php 

/**
 * Echos coffee incredient.
 *
 * @param Type of coffee
 */

function findDog($type) {
  if ($type == 'rottweiler') {
    echo '<p>The rottweiler breed is a domestic dog, regarded as medium-to-large or large. Its name derives from Germany.</p>';
  } else if ($type == 'pit bull') {
    echo '<p>The formal breeds of pit bulls are the American Pit Bull Terrier, American Staffordshire Terrier, American Bully, and Staffordshire Bull Terrier.</p>';
  } else {
    echo '<p>That&rsquo;s not a real dog!</p>';
  }
}