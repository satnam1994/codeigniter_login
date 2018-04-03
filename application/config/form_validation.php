<?php
$config = [

            "add_article_rules" => [
                                            [
                                              "field" => "title",
                                              "label" => "Article Title",
                                              "rules" => "required",
                                            ],
                                            [
                                              "field" => "body",
                                              "label" => "Article Body",
                                              "rules" => "required",
                                            ]
                                  ],
            "admin_login"       => [
                                            [
                                              "field" => "username",
                                              "label" => "User Name",
                                              "rules" => "trim|required|min_length[5]|max_length[12]",
                                            ],
                                            [
                                              "field" => "password",
                                              "label" => "Password",
                                              "rules" => "required",
                                            ]
                                  ],
			"admin_register"       => [
			                                [
                                              "field" => "first_name",
                                              "label" => "First Name",
                                              "rules" => "required|alpha|trim",
                                            ],
											[
                                              "field" => "last_name",
                                              "label" => "Last Name",
                                              "rules" => "required|alpha|trim",
                                            ],
											[
                                              "field" => "username",
                                              "label" => "User Name",
                                              "rules" => "trim|required|min_length[5]|max_length[12]",
                                            ],
                                            [
                                              "field" => "password",
                                              "label" => "Password",
                                              "rules" => "required|trim|min_length[8]",
                                            ],
											[
                                              "field" => "confirm_password",
                                              "label" => "Confirm Password",
                                              "rules" => "required|trim|required|matches[password]",
                                            ]
                                  ]							  
];

?>
