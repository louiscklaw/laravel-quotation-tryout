<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// use App\Quot;
// use App\QuotItem;
// use App\Client;
// use App\Http\Controllers\Pdf;

class ReportController extends Controller
{
    public function get_sample_line_chart()
    {
        return app()->chartjs
        ->name('bar')
        ->type('line')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February', 'March', 'April', 'May', 'June', 'July', 'Aug'])
        ->datasets([
            [
                "label" => "My First dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 56, 55, 40,31],
            ],
            [
                "label" => "My Second dataset",
                'backgroundColor' => "rgba(38, 185, 154, 0.31)",
                'borderColor' => "rgba(38, 185, 154, 0.7)",
                "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                "pointHoverBackgroundColor" => "#fff",
                "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [12, 33, 44, 44, 55, 23, 40,32],
            ]
        ])
        ->options([]);
    }

    public function get_sample_doughnut()
    {
        return app()->chartjs
        ->name('doughnut')
        ->type('doughnut')
        ->size(['width' => 400, 'height' => 200])
        ->labels(['January', 'February', 'March', 'April', 'May'])
        ->datasets([
            [
                "label" => ['Red',
                'Orange',
                'Yellow',
                'Green',
                'Blue'],
                'backgroundColor' => [
                    // window.chartColors.red
                    '#FF3D67',
                    // 'window.chartColors.orange',
                    '#FF9F40',
                    // 'window.chartColors.yellow',
                    '#FFC233',
                    // 'window.chartColors.green',
                    '#4BC0C0',
                    // 'window.chartColors.blue',
                    '#059BFF'
                ],
                // 'borderColor' => "rgba(38, 185, 154, 0.7)",
                // "pointBorderColor" => "rgba(38, 185, 154, 0.7)",
                // "pointBackgroundColor" => "rgba(38, 185, 154, 0.7)",
                // "pointHoverBackgroundColor" => "#fff",
                // "pointHoverBorderColor" => "rgba(220,220,220,1)",
                'data' => [65, 59, 80, 81, 200],
            ]
        ])
        ->options([]);
    }

    public function index()
    {
        $mn_highlight='reports';
        $sample_bar_chart = $this->get_sample_line_chart();
        $sample_line_chart = $this->get_sample_line_chart();
        $sample_donghunt_chart = $this->get_sample_doughnut();


        return view(
            'layouts.reports.helloreport',
            compact('mn_highlight',
                'sample_line_chart',
                'sample_bar_chart',
                'sample_donghunt_chart'
                )
        );
    }
}
