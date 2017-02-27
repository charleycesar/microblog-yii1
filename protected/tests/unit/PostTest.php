<?php
/**
 *
 */
class PostTest extends CDbTestCase
{
    protected $fixtures = ['posts'=>'Post'];


    public function testCreateInstance()
    {
        $model = Post::model();
        $this->assertTrue($model instanceof Post);
    }
}
