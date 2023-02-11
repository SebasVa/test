<?php

return [
    'userManagement' => [
        'title'          => 'Gestión de usuarios',
        'title_singular' => 'Gestión de usuarios',
    ],
    'permission'     => [
        'title'          => 'Permisos',
        'title_singular' => 'Permiso',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'role'           => [
        'title'          => 'Roles',
        'title_singular' => 'Rol',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'title'              => 'Título',
            'title_helper'       => '',
            'permissions'        => 'Permisos',
            'permissions_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
        ],
    ],
    'user'           => [
        'title'          => 'Usuarios',
        'title_singular' => 'Usuario',
        'fields'         => [
            'id'                       => 'ID',
            'id_helper'                => '',
            'name'                     => 'Nombre',
            'name_helper'              => '',
            'email'                    => 'Correo',
            'email_helper'             => '',
            'email_verified_at'        => 'Correo electrónico verificado en',
            'email_verified_at_helper' => '',
            'password'                 => 'Contraseña',
            'password_helper'          => '',
            'roles'                    => 'Roles',
            'roles_helper'             => '',
            'remember_token'           => 'Remember Token',
            'remember_token_helper'    => '',
            'created_at'               => 'Created at',
            'created_at_helper'        => '',
            'updated_at'               => 'Updated at',
            'updated_at_helper'        => '',
            'deleted_at'               => 'Deleted at',
            'deleted_at_helper'        => '',
        ],
    ],
    'setting'        => [
        'title'          => 'Configuraciones',
        'title_singular' => 'Configuración',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'key'               => 'Key',
            'key_helper'        => '',
            'value'             => 'Valor',
            'value_helper'      => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'speaker'        => [
        'title'          => 'Conferencistas',
        'title_singular' => 'Conferencista',
        'fields'         => [
            'id'                      => 'ID',
            'id_helper'               => '',
            'name'                    => 'Nombre',
            'name_helper'             => '',
            'description'             => 'Descripción',
            'description_helper'      => '',
            'photo'                   => 'Foto',
            'photo_helper'            => '',
            'twitter'                 => 'Twitter',
            'twitter_helper'          => '',
            'facebook'                => 'Facebook',
            'facebook_helper'         => '',
            'linkedin'                => 'LinkedIn',
            'linkedin_helper'         => '',
            'created_at'              => 'Created at',
            'created_at_helper'       => '',
            'updated_at'              => 'Updated at',
            'updated_at_helper'       => '',
            'deleted_at'              => 'Deleted at',
            'deleted_at_helper'       => '',
            'full_description'        => 'Descripción completa',
            'full_description_helper' => '',
        ],
    ],
    'schedule'       => [
        'title'          => 'Horarios',
        'title_singular' => 'Horario',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'day_number'        => 'Número de día',
            'day_number_helper' => '',
            'start_time'        => 'Hora de inicio',
            'start_time_helper' => '',
            'title'             => 'Título',
            'title_helper'      => '',
            'subtitle'          => 'Sutítulo',
            'subtitle_helper'   => '',
            'speaker'           => 'Conferencista',
            'speaker_helper'    => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'venue'          => [
        'title'          => 'Ubicaciones',
        'title_singular' => 'Ubicación',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Nombre',
            'name_helper'        => '',
            'photos'             => 'Foto',
            'photos_helper'      => '',
            'address'            => 'Dirección',
            'address_helper'     => '',
            'latitude'           => 'Latitud',
            'latitude_helper'    => '',
            'longitude'          => 'Longitud',
            'longitude_helper'   => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'description'        => 'Descripción',
            'description_helper' => '',
        ],
    ],
    'hotel'          => [
        'title'          => 'Hotels',
        'title_singular' => 'Hotel',
        'fields'         => [
            'id'                 => 'ID',
            'id_helper'          => '',
            'name'               => 'Name',
            'name_helper'        => '',
            'photo'              => 'Photo',
            'photo_helper'       => '',
            'address'            => 'Address',
            'address_helper'     => '',
            'description'        => 'Description',
            'description_helper' => '',
            'created_at'         => 'Created at',
            'created_at_helper'  => '',
            'updated_at'         => 'Updated at',
            'updated_at_helper'  => '',
            'deleted_at'         => 'Deleted at',
            'deleted_at_helper'  => '',
            'rating'             => 'Rating',
            'rating_helper'      => '',
        ],
    ],
    'gallery'        => [
        'title'          => 'Galleries',
        'title_singular' => 'Gallery',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'photos'            => 'Photos',
            'photos_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'sponsor'        => [
        'title'          => 'Sponsors',
        'title_singular' => 'Sponsor',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Name',
            'name_helper'       => '',
            'logo'              => 'Logo',
            'logo_helper'       => '',
            'link'              => 'Link',
            'link_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'faq'            => [
        'title'          => 'Preguntas frecuentes',
        'title_singular' => 'Preguntas frecuentes',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'question'          => 'Pregunta',
            'question_helper'   => '',
            'answer'            => 'Respuesta',
            'answer_helper'     => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'amenity'        => [
        'title'          => 'Beneficios',
        'title_singular' => 'Beneficios',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
    'price'          => [
        'title'          => 'Precios',
        'title_singular' => 'Precio',
        'fields'         => [
            'id'                => 'ID',
            'id_helper'         => '',
            'name'              => 'Nombre',
            'name_helper'       => '',
            'price'             => 'Precio',
            'price_helper'      => '',
            'amenities'         => 'Beneficios',
            'amenities_helper'  => '',
            'created_at'        => 'Created at',
            'created_at_helper' => '',
            'updated_at'        => 'Updated at',
            'updated_at_helper' => '',
            'deleted_at'        => 'Deleted at',
            'deleted_at_helper' => '',
        ],
    ],
];