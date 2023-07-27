<?php

namespace App\Charts;

use App\Models\Vehicle;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class VehicleChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\BarChart
    {
        $statusCounts = Vehicle::groupBy('status')
            ->selectRaw('status, count(*) as count')
            ->pluck('count', 'status')
            ->toArray();

        $statusLabels = ['tersedia', 'dipesan', 'dipakai', 'servis'];

        $statusCounts = array_replace(array_fill_keys($statusLabels, 0), $statusCounts);

        return $this->chart->barChart()
            ->setTitle('Grafik Pemakaian Kendaraan')
            ->setSubtitle('Total Pemakaian Kendaraan')
            ->addData('Status Count', array_values($statusCounts))
            ->setXAxis($statusLabels)
            ->setHeight(280);
    }
}
