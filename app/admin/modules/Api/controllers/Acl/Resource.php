<?php
class Acl_ResourceController extends Base\ApiController
{
    public function getAction()
    {
        $data = $this->model->get();
        foreach ($data as &$v) {
            $v['status'] = l('status.'.$v['status']);
        }
        return $this->send($data);
    }
}