<?php

namespace App\Repository\Interface;


interface SubcategoryInterface
{
    public function getAllData();
    public function storeOrUpdate($id = null, $data = []);
    public function edit($id);
    public function active($id);
    public function inactive($id);
    public function delete($id);
}
