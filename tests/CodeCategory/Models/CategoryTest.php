<?php

namespace CodePress\CodeCategory\tests\Models;

use CodePress\CodeCategory\Tests\Models\Category;
use CodePress\CodeCategory\Tests\AbstractTestCase;

class TagTest extends AbstractTestCase{
    public function setUp(){
        parent::setUp();
        $this->migrate();
    }

    public function test_category_persisted(){
        $category = Category::create(['name'=>'Category Test', 'active'=>true]);
        $this->assertEquals('Category Test', $category->name);

        $category = Category::all()->first();
        $this->assertEquals('first', $category->name);
    }

    public function test_parent_child_category(){
        $parentCategory = Category::create(['name'=>'Parent Test', 'active'=>true]);

        $category = Category::create(['name'=>'Category Test', 'active'=>true]);

        $category->parent()->associate($parentCategory)->save();

        $child = $parentCategory->children->first();

        $this->assertEquals('Category Test', $child->name);
        $this->assertEquals('Parent Test', $category->parent->name);
    }
}