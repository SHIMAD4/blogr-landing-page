<?php

  if(!defined('ABSPATH')) {
    exit;
  };

  use Carbon_Fields\Container;
  use Carbon_Fields\Field;

  Container::make( 'theme_options', 'Настройки сайта' )
  ->add_tab('Общие настройки', [
      Field::make( 'image', 'site_logo', 'Логотип' ),
  ] )
  ->add_tab('Баннер', [
    Field::make( 'text', 'banner_title', 'Заголовок банера' ),
    Field::make( 'text', 'banner_subtitle', 'Подзаголовок банера' ),
    Field::make( 'text', 'banner_btn_one', 'Текст первой кнопки' ),
    Field::make( 'text', 'banner_btn_two', 'Текст второй кнопки' ),
  ] )
  ->add_tab('Первая секция', [
    Field::make( 'text', 'section_one_title', 'Заголовок секции' ),
    Field::make( 'text', 'section_one_1_subtitle', '1.Подзаголовок секции' ),
    Field::make( 'text', 'section_one_1_paragraph', '1.Параграф секции' ),
    Field::make( 'text', 'section_one_2_subtitle', '2.Подзаголовок секции' ),
    Field::make( 'text', 'section_one_2_paragraph', '2.Параграф секции' ),
    Field::make( 'image', 'section_one_image', 'Картинка' ),
    Field::make( 'image', 'section_one_mobile_image', 'Картинка на мобильных устройствах' ),
  ] )
  ->add_tab('Вторая секция', [
    Field::make( 'text', 'section_two_title', 'Заголовок секции' ),
    Field::make( 'text', 'section_two_1_subtitle', '1.Подзаголовок секции' ),
    Field::make( 'image', 'section_two_image', 'Картинка' ),
  ] )
  ->add_tab('Третья секция', [
    Field::make( 'text', 'section_three_1_subtitle', '1.Подзаголовок секции' ),
    Field::make( 'text', 'section_three_1_paragraph', '1.Параграф секции' ),
    Field::make( 'text', 'section_three_2_subtitle', '2.Подзаголовок секции' ),
    Field::make( 'text', 'section_three_2_paragraph', '2.Параграф секции' ),
    Field::make( 'image', 'section_three_image', 'Картинка' ),
    Field::make( 'image', 'section_three_mobile_image', 'Картинка на мобильных устройствах' ),
  ] );