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
      $render .= render_lazy_load_image();
    }
    else
    {
      $render .= sfConfig::get('app_flava_lazy_loader_loading_prompt');
    }
  }

  $render .= '</div>';

  echo $render;
}

/**
 * render_lazy_load_image 
 * 
 * @param mixed $source 
 * @access public
 * @return void
 */
function render_lazy_load_image($source = null)
{
  if (!$source)
  {
    $source = sfConfig::get('app_flava_lazy_loader_loading_prompt');
  }

  return '<img src="' . $source . '" alt="Loading" title="Loading" />';
}
