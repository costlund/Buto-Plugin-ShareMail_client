<?php
class PluginShareMail_client{
  public function widget_button_share_page($data){
    $data = new PluginWfArray($data);
    if(!$data->get('data/u')){
      if(wfRequest::get('u')){
        $data->set('data/u', wfRequest::get('u'));
      }else{
        $data->set('data/u', wfServer::calcUrl());
      }
    }
    $data->set('data/data-u', $data->get('data/u'));
    $element = wfDocument::getElementFromFolder(__DIR__, __FUNCTION__);
    $element->setByTag($data->get('data'));
    wfDocument::renderElement($element);
  }
}