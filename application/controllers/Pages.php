<?php
class Pages extends CI_Controller {
  function search($search_terms = '', $start = 0)
  {
    // Если форма отправлена перепишем URL добавив строку запроса
    // обратите внимание, что с некоторыми символами 
    // могут быть проблемы.
    if ($this->input->post('q'))
    {
      redirect('/pages/search/' . $this->input->post('q'));
    }
    if ($search_terms)
    {
      // Определим сколько результатов 
      //выводить на страницу
      $results_per_page = $this->config->item('results_per_page');
      // Загружаем модель, выполняем поиск, определяем
      // сколько всего результатов поиска
      $this->load->model('page_model');
      $results = $this->page_model->search($search_terms, $start, $results_per_page);
      $total_results = $this->page_model->count_search_results($search_terms);
      // Загрузка постраничной навигации
      $this->_setup_pagination('/pages/search/' . $search_terms . '/', $total_results, $results_per_page);
      // Определяем какие результаты выводить
      $first_result = $start + 1;
      $last_result = min($start + $results_per_page, $total_results);
    }
    // Загрузка вида и вывод результатов
    $this->load->view('search_results', array(
      'search_terms' => $search_terms,
      'first_result' => @$first_result,
      'last_result' => @$last_result,
      'total_results' => @$total_results,
      'results' => @$results
    ));
  }
  function _setup_pagination($url, $total_results, $results_per_page)
  {
    // Не забываем загрузить постраничную навигацию
    $this->load->library('pagination');
    $uri_segment = count(explode('/', $url));
    // Инициализация постраничной навигации и установка
    // необходимых параметров
    $this->pagination->initialize(array(
      'base_url' => site_url($url),
      'uri_segment' => $uri_segment,
      'total_rows' => $total_results,
      'per_page' => $results_per_page
    ));
  }
}