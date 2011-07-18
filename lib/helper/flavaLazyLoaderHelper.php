<?php

/**
 * lazy_load_url_if 
 * 
 * @param mixed $url 
 * @param mixed $statement 
 * @access public
 * @return void
 */
function lazy_load_url_if($url, $statement)
{
  if ($statement)
  {
    echo lazy_load_url($url);
  }
}

/**
 * lazy_load_url 
 * 
 * @param mixed $url 
 * @access public
 * @return void
 */
function lazy_load_url($url)
{
  $render = '<div class="lazy-load" rel="' . $url . '">';

  if (sfConfig::get('app_flava_lazy_loader_loading_type'))
  {
    if (sfConfig::get('app_flava_lazy_loader_loading_type') == 'image')
    {
      $render .= '<img src="' . sfConfig::get('app_flava_lazy_loader_loading_prompt') . '" alt="Loading" title="Loading" />';
    }
    else
    {
      $render .= sfConfig::get('app_flava_lazy_loader_loading_prompt');
    }
  }

  $render .= '</div>';

  echo $render;
}
