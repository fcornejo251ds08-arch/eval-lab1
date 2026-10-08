<?php

/**
 * Calcula el promedio de un arreglo de notas.
 */
function calcularPromedio(array $notas): float {
    if (count($notas) === 0) {
        return 0.0;
    }
    return array_sum($notas) / count($notas);
}

/**
 * Determina el estado del estudiante según su promedio.
 */
function obtenerEstado(float $promedio): string {
    return $promedio >= 10.5 ? 'Aprobado' : 'Desaprobado';
}

/**
 * Genera el reporte completo procesando la lista de estudiantes.
 */
function generarReporte(array $estudiantes): array {
    $reporte = [];

    foreach ($estudiantes as $estudiante) {
        $promedio = calcularPromedio($estudiante['notas']);
        $estado = obtenerEstado($promedio);

        $reporte[] = [
            'nombre' => $estudiante['nombre'],
            'notas' => implode(', ', $estudiante['notas']),
            'promedio' => number_format($promedio, 2),
            'estado' => $estado
        ];
    }

    return $reporte;
}