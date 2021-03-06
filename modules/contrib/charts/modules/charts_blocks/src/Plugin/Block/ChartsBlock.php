<?php

namespace Drupal\charts_blocks\Plugin\Block;

use Drupal\Core\Block\BlockBase;
use Drupal\Core\Form\FormStateInterface;

\Drupal::moduleHandler()->loadInclude('charts', 'inc', 'includes/charts.pages');

/**
 * Provides a 'ChartsBlock' block.
 *
 * @Block(
 *  id = "charts_block",
 *  admin_label = @Translation("Charts block"),
 * )
 */
class ChartsBlock extends BlockBase {

  /**
   * {@inheritdoc}
   */
  public function defaultConfiguration() {

    // Get the default chart values.
    $defaults = \Drupal::state()->get('charts_default_settings', []);
    $defaults += charts_default_settings();
    foreach ($defaults as $default_key => $default_value) {
      $options[$default_key]['default'] = $default_value;
    }

    return $defaults;

  }

  /**
   * {@inheritdoc}
   */
  public function blockForm($form, FormStateInterface $form_state) {
    parent::blockForm($form, $form_state);

    // Merge in the global chart settings form.
    $field_options = [];
    $parents = ['charts_default_settings'];
    $form = charts_settings_form($form, $this->defaultConfiguration(), $field_options, $parents);

    /**
     * @todo figure out why the block label field does not respect weight.
     */
    // Reposition the block form fields to the top.
    $form['label']['#weight'] = '-26';
    $form['label_display']['#weight'] = '-25';

    // Check if chart will be a series.
    $form['series'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Series'),
      '#description' => $this->t('Does this chart graph more than a single series?'),
      '#default_value' => $this->configuration['series'],
      '#weight' => '-22',
    ];

    // If a single series.
    $form['data'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Data (single series)'),
      '#description' => $this->t('Enter the data for your chart, separated by comma: 1,3,5,7'),
      '#default_value' => $this->configuration['data'],
      '#weight' => '-19',
      '#states' => [
        'invisible' => [
          ':input[name="settings[series]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['series_label'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Series label (single series)'),
      '#description' => $this->t('Provide a label for your legend'),
      '#default_value' => $this->configuration['series_label'],
      '#weight' => '-18',
      '#states' => [
        'invisible' => [
          ':input[name="settings[series]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['color'] = [
      '#title' => $this->t('Color (single series)'),
      '#theme_wrappers' => ['form_element'],
      '#prefix' => '<div class="chart-colors">',
      '#suffix' => '</div>',
      '#weight' => '-17',
      '#states' => [
        'invisible' => [
          ':input[name="settings[series]"]' => ['checked' => TRUE],
        ],
      ],
    ];
    $form['color'][0] = [
      '#type' => 'textfield',
      '#attributes' => ['TYPE' => 'color'],
      '#size' => 10,
      '#maxlength' => 7,
      '#theme_wrappers' => [],
      '#suffix' => ' ',
      '#default_value' => $this->configuration['color'],
    ];

    // If making a series chart, the API requires this format.
    $form['data_series'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Data (multiple series)'),
      '#description' => $this->t('Enter the data for your chart using this format (must be valid JSON): {"name":"Number of players","color":"#0d233a","data":[50,60,100,132,133,234]},{"name":"Number of coaches","color":"#ff0000","data":[50,80,100,32,133,234]}'),
      '#default_value' => $this->configuration['data_series'],
      '#weight' => '-17',
      '#states' => [
        'invisible' => [
          ':input[name="settings[series]"]' => ['checked' => FALSE],
        ],
      ],
      '#placeholder' => 'Check the instructions below for formatting syntax.',
    ];
    $form['categories'] = [
      '#type' => 'textarea',
      '#title' => $this->t('Categories'),
      '#description' => $this->t('List categories. You should have as many as you have points of data in a series. They should be comma-separated: One,Two,Three,Four'),
      '#default_value' => $this->configuration['categories'],
      '#weight' => '-16',
    ];
    // Enable stacking.
    unset($form['grouping']['#parents']);
    $form['grouping'] = [
      '#type' => 'checkbox',
      '#title' => $this->t('Stacking'),
      '#description' => $this->t('Enable stacking'),
      '#default_value' => $this->configuration['grouping'],
      '#weight' => '-15',
    ];

    /**
     * Unset the #parents element from default form, then set the
     * default value.
     */
    unset($form['library']['#parents']);
    $form['library']['#default_value'] = $this->configuration['library'];
    $form['library']['#weight'] = '-23';

    unset($form['type']['#parents']);
    $form['type']['#default_value'] = $this->configuration['type'];
    $form['type']['#weight'] = '-24';

    unset($form['display']['title']['#parents']);
    $form['display']['title']['#default_value'] = $this->configuration['title'];

    unset($form['display']['title_position']['#parents']);
    $form['display']['title_position']['#default_value'] = $this->configuration['title_position'];

    unset($form['display']['data_labels']['#parents']);
    $form['display']['data_labels']['#default_value'] = $this->configuration['data_labels'];

    unset($form['display']['background']['#parents']);
    $form['display']['background']['#default_value'] = $this->configuration['background'];

    unset($form['display']['three_dimensional']['#parents']);
    $form['display']['three_dimensional']['#default_value'] = $this->configuration['three_dimensional'];

    unset($form['display']['polar']['#parents']);
    $form['display']['polar']['#default_value'] = $this->configuration['polar'];

    unset($form['display']['legend_position']['#parents']);
    $form['display']['legend_position']['#default_value'] = $this->configuration['legend_position'];

    unset($form['display']['tooltips']['#parents']);
    $form['display']['tooltips']['#default_value'] = $this->configuration['tooltips'];

    unset($form['display']['dimensions']['height']['#parents']);
    $form['display']['dimensions']['height']['#default_value'] = $this->configuration['height'];

    unset($form['display']['dimensions']['width']['#parents']);
    $form['display']['dimensions']['width']['#default_value'] = $this->configuration['width'];

    unset($form['xaxis']['xaxis_title']['#parents']);
    $form['xaxis']['xaxis_title']['#default_value'] = $this->configuration['xaxis_title'];

    unset($form['xaxis']['xaxis_labels_rotation']['#parents']);
    $form['xaxis']['xaxis_labels_rotation']['#default_value'] = $this->configuration['xaxis_labels_rotation'];

    unset($form['yaxis']['yaxis_title']['#parents']);
    $form['yaxis']['yaxis_title']['#default_value'] = $this->configuration['yaxis_title'];

    unset($form['yaxis']['yaxis_min']['#parents']);
    $form['yaxis']['yaxis_min']['#default_value'] = $this->configuration['yaxis_min'];

    unset($form['yaxis']['yaxis_max']['#parents']);
    $form['yaxis']['yaxis_max']['#default_value'] = $this->configuration['yaxis_max'];

    unset($form['yaxis']['yaxis_prefix']['#parents']);
    $form['yaxis']['yaxis_prefix']['#default_value'] = $this->configuration['yaxis_prefix'];

    unset($form['yaxis']['yaxis_suffix']['#parents']);
    $form['yaxis']['yaxis_suffix']['#default_value'] = $this->configuration['yaxis_suffix'];

    unset($form['yaxis']['yaxis_decimal_count']['#parents']);
    $form['yaxis']['yaxis_decimal_count']['#default_value'] = $this->configuration['yaxis_decimal_count'];

    unset($form['yaxis']['yaxis_labels_rotation']['#parents']);
    $form['yaxis']['yaxis_labels_rotation']['#default_value'] = $this->configuration['yaxis_labels_rotation'];

    return $form;
  }

  /**
   * {@inheritdoc}
   */
  public function blockSubmit($form, FormStateInterface $form_state) {

    $this->configuration['library'] = $form_state->getValue('library');
    $this->configuration['type'] = $form_state->getValue('type');
    $this->configuration['series'] = $form_state->getValue('series');
    $this->configuration['data'] = $form_state->getValue('data');
    $this->configuration['color'] = $form_state->getValue('color');
    $this->configuration['data_series'] = $form_state->getValue('data_series');
    $this->configuration['series_label'] = $form_state->getValue('series_label');
    $this->configuration['categories'] = $form_state->getValue('categories');
    $this->configuration['grouping'] = $form_state->getValue('grouping');
    $this->configuration['field_colors'] = $form_state->getValue('field_colors');
    $this->configuration['title'] = $form_state->getValue(['display', 'title']);
    $this->configuration['title_position'] = $form_state->getValue([
      'display',
      'title_position',
    ]);
    $this->configuration['data_labels'] = $form_state->getValue([
      'display',
      'data_labels',
    ]);
    $this->configuration['legend'] = $form_state->getValue('legend');
    $this->configuration['legend_position'] = $form_state->getValue([
      'display',
      'legend_position',
    ]);
    $this->configuration['background'] = $form_state->getValue([
      'display',
      'background',
    ]);
    $this->configuration['three_dimensional'] = $form_state->getValue([
      'display',
      'three_dimensional',
    ]);
    $this->configuration['polar'] = $form_state->getValue(['display', 'polar']);
    $this->configuration['tooltips'] = $form_state->getValue([
      'display',
      'tooltips',
    ]);
    $this->configuration['tooltips_use_html'] = $form_state->getValue('tooltips_use_html');
    $this->configuration['width'] = $form_state->getValue([
      'display',
      'dimensions',
      'width',
    ]);
    $this->configuration['height'] = $form_state->getValue([
      'display',
      'dimensions',
      'height',
    ]);
    $this->configuration['xaxis_title'] = $form_state->getValue([
      'xaxis',
      'xaxis_title',
    ]);
    $this->configuration['xaxis_labels_rotation'] = $form_state->getValue([
      'xaxis',
      'xaxis_labels_rotation',
    ]);
    $this->configuration['yaxis_title'] = $form_state->getValue([
      'yaxis',
      'yaxis_title',
    ]);
    $this->configuration['yaxis_min'] = $form_state->getValue([
      'yaxis',
      'yaxis_min',
    ]);
    $this->configuration['yaxis_max'] = $form_state->getValue([
      'yaxis',
      'yaxis_max',
    ]);
    $this->configuration['yaxis_prefix'] = $form_state->getValue([
      'yaxis',
      'yaxis_prefix',
    ]);
    $this->configuration['yaxis_suffix'] = $form_state->getValue([
      'yaxis',
      'yaxis_suffix',
    ]);
    $this->configuration['yaxis_decimal_count'] = $form_state->getValue([
      'yaxis',
      'yaxis_decimal_count',
    ]);
    $this->configuration['yaxis_labels_rotation'] = $form_state->getValue([
      'yaxis',
      'yaxis_labels_rotation',
    ]);

  }

  /**
   * {@inheritdoc}
   */
  public function build() {

    $categories = explode(",", $this->configuration['categories']);
    $data = json_decode('[' . $this->configuration['data'] . ']', TRUE);

    if (!empty($this->configuration['data_series'])) {
      $seriesData = json_decode('[' . $this->configuration['data_series'] . ']', TRUE);
    }
    else {
      $seriesData = [
        [
          'name' => $this->configuration['series_label'],
          'color' => $this->configuration['color'][0],
          'data' => $data,
        ],
      ];
    }

    /** Helps for pie and donut charts, which need more colors than configurable
     * for a single series.
     */
    $defaults = $this->defaultConfiguration();

    $options = [
      'library' => $this->configuration['library'],
      'type' => $this->configuration['type'],
      'grouping' => $this->configuration['grouping'],
      'field_colors' => $this->configuration['field_colors'],
      'colors' => $defaults['colors'],
      'title' => $this->configuration['title'],
      'title_position' => $this->configuration['title_position'],
      'data_labels' => $this->configuration['data_labels'],
      'legend' => $this->configuration['legend'],
      'legend_position' => $this->configuration['legend_position'],
      'background' => $this->configuration['background'],
      'three_dimensional' => $this->configuration['three_dimensional'],
      'polar' => $this->configuration['polar'],
      'tooltips' => $this->configuration['tooltips'],
      'tooltips_use_html' => $this->configuration['tooltips_use_html'],
      'width' => $this->configuration['width'],
      'height' => $this->configuration['height'],
      'xaxis_title' => $this->configuration['xaxis_title'],
      'xaxis_labels_rotation' => $this->configuration['xaxis_labels_rotation'],
      'yaxis_title' => $this->configuration['yaxis_title'],
      'yaxis_min' => $this->configuration['yaxis_min'],
      'yaxis_max' => $this->configuration['yaxis_max'],
      'yaxis_prefix' => $this->configuration['yaxis_prefix'],
      'yaxis_suffix' => $this->configuration['yaxis_suffix'],
      'yaxis_decimal_count' => $this->configuration['yaxis_decimal_count'],
      'yaxis_labels_rotation' => $this->configuration['yaxis_labels_rotation'],
    ];

    // Creates a UUID for the chart ID.
    $uuid_service = \Drupal::service('uuid');
    $chartId = 'chart-' . $uuid_service->generate();

    $build = [
      '#theme' => 'charts_blocks',
      '#library' => $this->configuration['library'],
      '#categories' => $categories,
      '#seriesData' => $seriesData,
      '#options' => $options,
      '#id' => $chartId,
    ];

    return $build;
  }

}
