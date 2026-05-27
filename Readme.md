# Sistema Integral de Gestión Académica para Institución Educativa

## Descripción del proyecto

El presente proyecto consiste en el desarrollo de una aplicación web para una Institución Educativa, orientada a la administración y control de sus procesos académicos, administrativos y financieros.

El sistema permitirá gestionar información de alumnos, profesores, personal administrativo, directores de carrera y secretaría académica, centralizando las operaciones relacionadas con inscripciones, reinscripciones, bajas, pagos, becas, titulación, calificaciones, asistencias, carreras, planes de estudio, posgrados y reportes institucionales.

La aplicación contará con una vista principal de inicio (HOME), desde la cual cada tipo de usuario podrá acceder únicamente a los módulos y opciones correspondientes a su rol dentro de la institución.

## Objetivo general

Desarrollar una aplicación web utilizando el framework **Laravel** que permita optimizar la gestión académica y administrativa de una Institución Educativa, ofreciendo un control organizado, seguro y eficiente de alumnos, profesores, pagos, calificaciones, becas, titulaciones, carreras y reportes institucionales.

## Objetivos específicos

- Administrar los procesos escolares de los alumnos, incluyendo inscripciones, reinscripciones, bajas y cambios de carrera.
- Registrar y consultar pagos, becas y procesos de titulación.
- Permitir a los profesores capturar calificaciones parciales, finales y extraordinarias, así como registrar asistencias.
- Administrar materias, horarios, carreras, planes de estudio y posgrados.
- Implementar evaluaciones de profesores realizadas por alumnos y directores de carrera.
- Generar reportes académicos y administrativos para la toma de decisiones.
- Mostrar un menú HOME personalizado de acuerdo con el rol del usuario autenticado.

## Módulos del sistema

### 1. Alumnos

El módulo de alumnos permitirá realizar las siguientes operaciones:

- Inscripciones.
- Reinscripciones.
- Bajas.
- Cambios de carrera.
- Consulta y registro de pagos.
- Evaluación de profesores.

### 2. Profesores

El módulo de profesores permitirá:

- CRUD de calificaciones parciales.
- CRUD de calificaciones finales.
- CRUD de calificaciones de exámenes extraordinarios.
- Consulta y generación de reportes de calificaciones.
- Registro y consulta de asistencias.

### 3. Administrativos Nivel A

Los usuarios administrativos de Nivel A podrán gestionar:

- CRUD de materias.
- CRUD de horarios de profesores.
- CRUD de alumnos.

### 4. Administrativos Nivel B

Los usuarios administrativos de Nivel B podrán gestionar:

- CRUD de pagos.
- CRUD de becas.
- CRUD de procesos de titulación.

### 5. Director de carrera

El director de carrera podrá realizar:

- CRUD de profesores.
- Evaluación de profesores.
- CRUD de carreras.
- CRUD de planes de estudio.
- CRUD de posgrados.

### 6. Secretario Académico

El secretario académico contará con acceso a los siguientes reportes:

- Reportes de matrícula.
- Reportes de bajas y deserciones.
- Reportes de becas.
- Reportes de aprovechamiento por grupo.
- Reportes de aprovechamiento por carrera.
- Reportes por nivel académico: licenciatura y maestría.

## Vista HOME

La aplicación contará con una vista principal denominada **HOME**, que mostrará un menú dinámico según el rol del usuario autenticado.

Ejemplo de opciones por usuario:

| Rol | Opciones principales del menú |
| --- | --- |
| Alumno | Inscripción, reinscripción, pagos, evaluación de profesores |
| Profesor | Calificaciones, extraordinarios, asistencias, reportes |
| Administrativo Nivel A | Materias, horarios, alumnos |
| Administrativo Nivel B | Pagos, becas, titulación |
| Director de carrera | Profesores, carreras, planes de estudio, posgrados |
| Secretario Académico | Matrícula, bajas, becas, aprovechamiento |

## Pila tecnológica

| Tecnología | Uso dentro del proyecto |
| --- | --- |
| **Laravel** | Framework principal para el desarrollo de la aplicación web |
| PHP | Lenguaje de programación backend |
| Blade | Creación de vistas e interfaces del sistema |
| MySQL | Base de datos relacional del proyecto |
| HTML5 | Estructura de las interfaces |
| CSS3 / Bootstrap | Diseño visual y adaptación de las vistas |
| JavaScript | Interactividad del lado del cliente |
| Composer | Gestión de dependencias PHP |
| Git y GitHub | Control de versiones y repositorio del proyecto |

## Equipo de desarrollo

| Integrante | Rol dentro del equipo |
| --- | --- |
| Natalia Jaime de Jesus | Líder de proyecto / Backend |
| Lian Sebastian Gonzalez Diaz  2 | Desarrollo Frontend |
| Kiyoshi Juarez Muñoz Tahiri  3 | Desarrollo Frontend |
| Uriel Hernandez Cruz 4 | Base de datos |
| Victor Urrutia Buzo 5 | Pruebas y documentación |
| Alexa Alonso Ramirez 6 | Pruebas y documentación |

## Metodología de trabajo

El proyecto será desarrollado utilizando una metodología ágil basada en **Scrum**, organizando el trabajo en sprints que permitan entregar avances funcionales de manera incremental.

## Número de sprints

Para el alcance planteado, se propone trabajar con **6 sprints**.

| Sprint | Actividades principales |
| --- | --- |
| Sprint 1 | Análisis de requerimientos, diseño de base de datos, autenticación y roles |
| Sprint 2 | Módulo de alumnos: inscripciones, reinscripciones, bajas y cambios de carrera |
| Sprint 3 | Módulo de profesores: calificaciones, extraordinarios y asistencias |
| Sprint 4 | Módulos administrativos: materias, horarios, pagos, becas y titulación |
| Sprint 5 | Módulo de director de carrera y secretario académico |
| Sprint 6 | Vista HOME, reportes, pruebas, correcciones y documentación final |

## Roles del sistema

El sistema manejará los siguientes perfiles de usuario:

- Alumno.
- Profesor.
- Administrativo Nivel A.
- Administrativo Nivel B.
- Director de carrera.
- Secretario Académico.

Cada rol tendrá permisos específicos para acceder únicamente a la información y operaciones correspondientes a sus funciones.

## Repositorio

Este proyecto utiliza **Git** y **GitHub** para el control de versiones.

El framework seleccionado para el desarrollo del sistema es:

> **Laravel**