<?php

class Comment extends Document {
  $indexes = array(
    'post_id'      => 'INTEGER',
  );
  $belongsTo = array(
    'document'=>'Post'
  );
  
  protected beforeSave() {
    if( $this->hasChanged('body_src') ){
      $this->body = markdown($this->body_src);
    }
  }
}
