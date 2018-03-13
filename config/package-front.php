<?php

return [
    /*
      |-----------------------------------------------------------------------
      | Block ID
      |-----------------------------------------------------------------------
      | List of block ids that used in all pages
      |
     */
    'block_ids' => [
        2000,
        2001,
        2002,
        2003,
        2004,
        2005,
        2006,
        2007,
        2008,
        2009,
        2010,
        2011,
        2012,
        2013,
        2014,
        2015,
        2016,
        2017,
        2018,
        2019,
        2020,
        2021,
//            2022,
        2023,
        2024,
        2025,
        2026,
        2027,
        2028,
        2029,
        2030,
        2031,
        2032,
        2033,
        2034,
        2035,
        2036,
        2037,
        2038,
        2039,
        2040,
        2041,
        2042,
        2043,
        2044,
        2045,
        2046,
        2047,
        2048,
        2049,
        2050,
        2051,
//            2052,
        2053,
    ],
    /*
      |-----------------------------------------------------------------------
      | List of configs on page
      |-----------------------------------------------------------------------
      |
     */
    'page_config' => [
        //home page
        'home' => [
            'ids' => [
                2034,
                2038,
                2033,
                2043,
                2042,
                2039,
                2035,
                2040,
                2036,
                2041,
                2037,
                2044
            ],
            'libs' => [
                2038 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //home page
        //blog page
        'blog' => [
            'ids' => [
                2034,
                2026,
                2018,
                2028,
                2044,
                2017,
                2019,
                2020,
                2021
            ],
            'libs' => [
                2038 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //blog page
        //about page
        'about' => [
            'ids' => [
                2034,
                2026,
                2014,
                2035,
                2015,
                2049,
                2024,
                2016,
                2044
            ],
            'libs' => [
                2024 => [
                    'js' => [
                        'circle-progress'
                    ]
                ],
                2014 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
                2015 => [
                    'js' => [
                        'jquery.accordion'
                    ]
                ],
            ]
        ], //about page
        //blog detail page
        'blog-detail' => [
            'ids' => [
                2034,
                2026,
                2006,
                2047,
                2025,
                2048,
                2017,
                2019,
                2020,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //blog detail page
        //contact page
        'contact' => [
            'ids' => [
                2034,
                2009,
                2051,
                2030,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //contact page
        //course page
        'course' => [
            'ids' => [
                2034,
                2026,
                2031,
                2032,
                2028,
                2044,
            ],
            'libs' => [
                2031 => [
                    'js' => [
                        '2031_star'
                    ]
                ],
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //course page
        //course detail page
        'course-detail' => [
            'ids' => [
                2034,
                2009,
                2045,
                2031,
                2032,
                2028,
                2044,
            ],
            'libs' => [
                2031 => [
                    'js' => [
                        '2031_star'
                    ]
                ],
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
                2045 => [
                    'js' => [
                        'xzoom.min'
                    ]
                ],
            ]
        ], //course detail page
        //edit profile page
        'edit-profile' => [
            'ids' => [
                2034,
                2009,
                2002,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //edit profile page
        //error page
        'error' => [
            'ids' => [
                2034,
                2009,
                2000,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //error page
        //event page
        'event' => [
            'ids' => [
                2034,
                2026,
                2027,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //event page
        //event detail page
        'event-detail' => [
            'ids' => [
                2034,
                2009,
                2046,
                2029,
                2030,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //event detail page
        //faq page
        'faq' => [
            'ids' => [
                2034,
                2026,
                2050,
                2017,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //faq page
        //gallery page
        'gallery' => [
            'ids' => [
                2034,
                2009,
                2013,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //gallery page
        //lesson page
        'lesson' => [
            'ids' => [
                2034,
                2009,
                2053,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ], //lesson page
        //news page
        'news' => [
            'ids' => [
                2034,
                2026,
                2012,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//news page
        //our teacher page
        'our-teacher' => [
            'ids' => [
                2034,
                2026,
                2003,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//our teacher page
        //service page
        'service' => [
            'ids' => [
                2034,
                2026,
                2033,
                2023,
                2024,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//service page
        //signin page
        'signin' => [
            'ids' => [
                2034,
                2009,
                2008,
                2011,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//signin page
        //student login
        'student-login' => [
            'ids' => [
                2034,
                2009,
                2008,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//student login
        //student profile
        'student-profile' => [
            'ids' => [
                2034,
                2026,
                2005,
                2028,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//student profile
        //teacher profile
        'teacher-profile' => [
            'ids' => [
                2034,
                2009,
                2001,
                2044,
            ],
            'libs' => [
                2044 => [
                    'js' => [
                        'swiper.min'
                    ]
                ],
            ]
        ],//teacher profile
    ],
];
