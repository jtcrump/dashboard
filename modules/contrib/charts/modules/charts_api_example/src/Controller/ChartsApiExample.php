<?php

namespace Drupal\charts_api_example\Controller;

use Drupal\charts\Services\ChartsSettingsService;
use Drupal\Core\Controller\ControllerBase;
use Drupal\Core\DependencyInjection\ContainerInjectionInterface;
use Symfony\Component\DependencyInjection\ContainerInterface;

/**
 * Charts Api Example.
 */
class ChartsApiExample extends ControllerBase implements ContainerInjectionInterface {

  private $chartSettings;

  /**
   * Construct.
   *
   * @param \Drupal\charts\Services\ChartsSettingsService $chartSettings
   *   Service ChartsSettingsService.
   */
  public function __construct(ChartsSettingsService $chartSettings) {
    $this->chartSettings = $chartSettings->getChartsSettings();
  }

  /**
   * Display.
   *
   * @return array
   *   Array to render.
   */
  public function display() {

    $library = $this->chartSettings['library'];
    if (empty($library)) {
      drupal_set_message($this->t('You need to first configure Charts default settings'));
      return [];
    }

    // Customize options here.
    $options = [
      'type' => $this->chartSettings['type'],
      'title' => $this->t('Chart title'),
      'xaxis_title' => $this->t('X-Axis'),
      'yaxis_title' => $this->t('Y-Axis'),
      'yaxis_min' => '',
      'yaxis_max' => '',
      'three_dimensional' => FALSE,
      'title_position' => 'out',
      'legend_position' => 'right',
      //'grouping'   => TRUE,
    ];

    // Sample data format.
    $categories = ['Category 1', 'Category 2', 'Category 3', 'Category 4'];
    $seriesData[] = [
      'name' => 'Series 1',
      'color' => '#0d233a',
      'type' => NULL,
      'data' => [250, 350, 400, 200],
    ];
    switch ($this->chartSettings['type']) {
      default:
        $seriesData[] = [
          'name' => 'Series 2',
          'color' => '#8bbc21',
          'type' => 'column',
          'data' => [150, 450, 500, 300],
        ];
        $seriesData[] = [
          'name' => 'Series 3',
          'color' => '#910000',
          'type' => 'area',
          'data' => [0, 0, 60, 90],
        ];
      case 'pie':
      case 'donut':

    }

    // Creates a UUID for the chart ID.
    $uuid_service = \Drupal::service('uuid');
    $chartId = 'chart-' . $uuid_service->generate();

    $build = [
      '#theme' => 'charts_api_example',
      '#library' => (string) $library,
      '#categories' => $categories,
      '#seriesData' => $seriesData,
      '#options' => $options,
      '#id' => $chartId,
    ];

    return $build;
  }

  /**
   * {@inheritdoc}
   */
  public static function create(ContainerInterface $container) {
    return new static(
      $container->get('charts.settings')
    );
  }

}
