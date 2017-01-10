<?php

/* @SonataAdmin/Core/tab_menu_template.html.twig */
class __TwigTemplate_0c977e38a9738f50eb9b09d4c2c61c86d0ca3c277d130c0c09ba426a72c65cdd extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 1);
        $this->blocks = array(
            'item' => array($this, 'block_item'),
            'dividerElement' => array($this, 'block_dividerElement'),
            'linkElement' => array($this, 'block_linkElement'),
            'spanElement' => array($this, 'block_spanElement'),
            'dropdownElement' => array($this, 'block_dropdownElement'),
            'label' => array($this, 'block_label'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "knp_menu.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_b608f2a4b91d3f1cacff1dd60f61d0eb670266420b62e4feb57ce7ddf745c620 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b608f2a4b91d3f1cacff1dd60f61d0eb670266420b62e4feb57ce7ddf745c620->enter($__internal_b608f2a4b91d3f1cacff1dd60f61d0eb670266420b62e4feb57ce7ddf745c620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/tab_menu_template.html.twig"));

        $__internal_6d89491948dc64fd1098c2883f30858590d9d986c92d8b5ee5b009b8715b155a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6d89491948dc64fd1098c2883f30858590d9d986c92d8b5ee5b009b8715b155a->enter($__internal_6d89491948dc64fd1098c2883f30858590d9d986c92d8b5ee5b009b8715b155a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/Core/tab_menu_template.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_b608f2a4b91d3f1cacff1dd60f61d0eb670266420b62e4feb57ce7ddf745c620->leave($__internal_b608f2a4b91d3f1cacff1dd60f61d0eb670266420b62e4feb57ce7ddf745c620_prof);

        
        $__internal_6d89491948dc64fd1098c2883f30858590d9d986c92d8b5ee5b009b8715b155a->leave($__internal_6d89491948dc64fd1098c2883f30858590d9d986c92d8b5ee5b009b8715b155a_prof);

    }

    // line 3
    public function block_item($context, array $blocks = array())
    {
        $__internal_650978232b62a3ceb85370cb151bdb1042216c72e65720380fbc973a0669b9db = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_650978232b62a3ceb85370cb151bdb1042216c72e65720380fbc973a0669b9db->enter($__internal_650978232b62a3ceb85370cb151bdb1042216c72e65720380fbc973a0669b9db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        $__internal_12ff196bae20c9428a99c044bda7216ef413a2ca9a012da8b6168cb73c2e77ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12ff196bae20c9428a99c044bda7216ef413a2ca9a012da8b6168cb73c2e77ac->enter($__internal_12ff196bae20c9428a99c044bda7216ef413a2ca9a012da8b6168cb73c2e77ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "item"));

        // line 4
        $context["macros"] = $this->loadTemplate("knp_menu.html.twig", "@SonataAdmin/Core/tab_menu_template.html.twig", 4);
        // line 5
        if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "displayed", array())) {
            // line 6
            $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attributes", array());
            // line 7
            $context["is_dropdown"] = (($this->getAttribute(($context["attributes"] ?? null), "dropdown", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "dropdown", array()), false)) : (false));
            // line 8
            $context["divider_prepend"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_prepend", array()), false)) : (false));
            // line 9
            $context["divider_append"] = (($this->getAttribute(($context["attributes"] ?? null), "divider_append", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["attributes"] ?? null), "divider_append", array()), false)) : (false));
            // line 10
            echo "
";
            // line 12
            $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("dropdown" => null, "divider_prepend" => null, "divider_append" => null));
            // line 14
            if (($context["divider_prepend"] ?? $this->getContext($context, "divider_prepend"))) {
                // line 15
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
            // line 17
            echo "
";
            // line 19
            $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "class"), "method"))) : (array()));
            // line 21
            if (array_key_exists("matcher", $context)) {
                echo " ";
                // line 22
                if ($this->getAttribute(($context["matcher"] ?? $this->getContext($context, "matcher")), "isCurrent", array(0 => ($context["item"] ?? $this->getContext($context, "item"))), "method")) {
                    // line 23
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 24
($context["matcher"] ?? $this->getContext($context, "matcher")), "isAncestor", array(0 => ($context["item"] ?? $this->getContext($context, "item")), 1 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "depth", array())), "method")) {
                    // line 25
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            } else {
                // line 27
                echo " ";
                // line 28
                if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array())) {
                    // line 29
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentClass", array())));
                } elseif ($this->getAttribute(                // line 30
($context["item"] ?? $this->getContext($context, "item")), "currentAncestor", array())) {
                    // line 31
                    $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "ancestorClass", array())));
                }
            }
            // line 35
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeFirst", array())) {
                // line 36
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "firstClass", array())));
            }
            // line 38
            if ($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "actsLikeLast", array())) {
                // line 39
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "lastClass", array())));
            }
            // line 41
            echo "
";
            // line 43
            $context["childrenClasses"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttribute", array(0 => "class"), "method"))) : (array()));
            // line 44
            $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => ("menu_level_" . $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()))));
            // line 45
            echo "
";
            // line 47
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 48
                $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown"));
                // line 49
                $context["childrenClasses"] = twig_array_merge(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), array(0 => "dropdown-menu"));
            }
            // line 51
            echo "
";
            // line 53
            if ( !twig_test_empty(($context["classes"] ?? $this->getContext($context, "classes")))) {
                // line 54
                $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
            }
            // line 56
            $context["listAttributes"] = twig_array_merge($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "childrenAttributes", array()), array("class" => twig_join_filter(($context["childrenClasses"] ?? $this->getContext($context, "childrenClasses")), " ")));
            // line 57
            echo "
";
            // line 59
            echo "    <li";
            echo $context["macros"]->getattributes(($context["attributes"] ?? $this->getContext($context, "attributes")));
            echo ">";
            // line 60
            if (($context["is_dropdown"] ?? $this->getContext($context, "is_dropdown"))) {
                // line 61
                echo "            ";
                $this->displayBlock("dropdownElement", $context, $blocks);
            } elseif (( !twig_test_empty($this->getAttribute(            // line 62
($context["item"] ?? $this->getContext($context, "item")), "uri", array())) && ( !$this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "current", array()) || $this->getAttribute(($context["options"] ?? $this->getContext($context, "options")), "currentAsLink", array())))) {
                // line 63
                echo "            ";
                $this->displayBlock("linkElement", $context, $blocks);
            } else {
                // line 65
                echo "            ";
                $this->displayBlock("spanElement", $context, $blocks);
            }
            // line 68
            echo "        ";
            $this->displayBlock("list", $context, $blocks);
            echo "
    </li>";
            // line 71
            if (($context["divider_append"] ?? $this->getContext($context, "divider_append"))) {
                // line 72
                echo "        ";
                $this->displayBlock("dividerElement", $context, $blocks);
            }
        }
        
        $__internal_12ff196bae20c9428a99c044bda7216ef413a2ca9a012da8b6168cb73c2e77ac->leave($__internal_12ff196bae20c9428a99c044bda7216ef413a2ca9a012da8b6168cb73c2e77ac_prof);

        
        $__internal_650978232b62a3ceb85370cb151bdb1042216c72e65720380fbc973a0669b9db->leave($__internal_650978232b62a3ceb85370cb151bdb1042216c72e65720380fbc973a0669b9db_prof);

    }

    // line 77
    public function block_dividerElement($context, array $blocks = array())
    {
        $__internal_388283c3abb034e465af691e7d9f3d08a0a87ee95b316b7a69c9ad23ad4b4a2f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_388283c3abb034e465af691e7d9f3d08a0a87ee95b316b7a69c9ad23ad4b4a2f->enter($__internal_388283c3abb034e465af691e7d9f3d08a0a87ee95b316b7a69c9ad23ad4b4a2f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        $__internal_171ba6a732277dde27abd327c2208f4ffd597cd3095cbd92202e5b616ebc7015 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_171ba6a732277dde27abd327c2208f4ffd597cd3095cbd92202e5b616ebc7015->enter($__internal_171ba6a732277dde27abd327c2208f4ffd597cd3095cbd92202e5b616ebc7015_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dividerElement"));

        // line 78
        if (($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "level", array()) == 1)) {
            // line 79
            echo "    <li class=\"divider-vertical\"></li>
";
        } else {
            // line 81
            echo "    <li class=\"divider\"></li>
";
        }
        
        $__internal_171ba6a732277dde27abd327c2208f4ffd597cd3095cbd92202e5b616ebc7015->leave($__internal_171ba6a732277dde27abd327c2208f4ffd597cd3095cbd92202e5b616ebc7015_prof);

        
        $__internal_388283c3abb034e465af691e7d9f3d08a0a87ee95b316b7a69c9ad23ad4b4a2f->leave($__internal_388283c3abb034e465af691e7d9f3d08a0a87ee95b316b7a69c9ad23ad4b4a2f_prof);

    }

    // line 85
    public function block_linkElement($context, array $blocks = array())
    {
        $__internal_bace037dc8348c7e319dbeea99cc5ad581469215a7eef33bc2aa9c021dfc01a4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bace037dc8348c7e319dbeea99cc5ad581469215a7eef33bc2aa9c021dfc01a4->enter($__internal_bace037dc8348c7e319dbeea99cc5ad581469215a7eef33bc2aa9c021dfc01a4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        $__internal_16342361c64683f07fedbf505651b27e5a8bb306820d4e2977bef5015fc0c396 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_16342361c64683f07fedbf505651b27e5a8bb306820d4e2977bef5015fc0c396->enter($__internal_16342361c64683f07fedbf505651b27e5a8bb306820d4e2977bef5015fc0c396_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "linkElement"));

        // line 86
        echo "    <a href=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "uri", array()), "html", null, true);
        echo "\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array())), "method");
        echo ">
        ";
        // line 87
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 88
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 90
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </a>
";
        
        $__internal_16342361c64683f07fedbf505651b27e5a8bb306820d4e2977bef5015fc0c396->leave($__internal_16342361c64683f07fedbf505651b27e5a8bb306820d4e2977bef5015fc0c396_prof);

        
        $__internal_bace037dc8348c7e319dbeea99cc5ad581469215a7eef33bc2aa9c021dfc01a4->leave($__internal_bace037dc8348c7e319dbeea99cc5ad581469215a7eef33bc2aa9c021dfc01a4_prof);

    }

    // line 94
    public function block_spanElement($context, array $blocks = array())
    {
        $__internal_d84e3bf335d625b3932af1aa662ac3f220c83c7764a8617085623e2394a00bad = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d84e3bf335d625b3932af1aa662ac3f220c83c7764a8617085623e2394a00bad->enter($__internal_d84e3bf335d625b3932af1aa662ac3f220c83c7764a8617085623e2394a00bad_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        $__internal_3df8c46bfe5df2be9ae418ac18481cb8e8e10962038e78b5080e6e9242d9c2ed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3df8c46bfe5df2be9ae418ac18481cb8e8e10962038e78b5080e6e9242d9c2ed->enter($__internal_3df8c46bfe5df2be9ae418ac18481cb8e8e10962038e78b5080e6e9242d9c2ed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "spanElement"));

        // line 95
        echo "    <span ";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "labelAttributes", array())), "method");
        echo ">
        ";
        // line 96
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 97
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 99
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
    </span>
";
        
        $__internal_3df8c46bfe5df2be9ae418ac18481cb8e8e10962038e78b5080e6e9242d9c2ed->leave($__internal_3df8c46bfe5df2be9ae418ac18481cb8e8e10962038e78b5080e6e9242d9c2ed_prof);

        
        $__internal_d84e3bf335d625b3932af1aa662ac3f220c83c7764a8617085623e2394a00bad->leave($__internal_d84e3bf335d625b3932af1aa662ac3f220c83c7764a8617085623e2394a00bad_prof);

    }

    // line 103
    public function block_dropdownElement($context, array $blocks = array())
    {
        $__internal_8be404435260303a9051440212bba84c5f12bc2e32805fd728eed60eb4a5d1ba = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8be404435260303a9051440212bba84c5f12bc2e32805fd728eed60eb4a5d1ba->enter($__internal_8be404435260303a9051440212bba84c5f12bc2e32805fd728eed60eb4a5d1ba_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        $__internal_a2ff720b9e4747d7cc5dfa47a6d6bb01d09fbde60cfd33f37e8fe8a400d7a186 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a2ff720b9e4747d7cc5dfa47a6d6bb01d09fbde60cfd33f37e8fe8a400d7a186->enter($__internal_a2ff720b9e4747d7cc5dfa47a6d6bb01d09fbde60cfd33f37e8fe8a400d7a186_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "dropdownElement"));

        // line 104
        $context["classes"] = (( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) ? (array(0 => $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttribute", array(0 => "class"), "method"))) : (array()));
        // line 105
        $context["classes"] = twig_array_merge(($context["classes"] ?? $this->getContext($context, "classes")), array(0 => "dropdown-toggle"));
        // line 106
        $context["attributes"] = $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "linkAttributes", array());
        // line 107
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("class" => twig_join_filter(($context["classes"] ?? $this->getContext($context, "classes")), " ")));
        // line 108
        $context["attributes"] = twig_array_merge(($context["attributes"] ?? $this->getContext($context, "attributes")), array("data-toggle" => "dropdown"));
        // line 109
        echo "    <a href=\"#\"";
        echo $this->getAttribute(($context["macros"] ?? $this->getContext($context, "macros")), "attributes", array(0 => ($context["attributes"] ?? $this->getContext($context, "attributes"))), "method");
        echo ">
        ";
        // line 110
        if ( !twig_test_empty($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"))) {
            // line 111
            echo "            <i class=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "attribute", array(0 => "icon"), "method"), "html", null, true);
            echo "\"></i>
        ";
        }
        // line 113
        echo "        ";
        $this->displayBlock("label", $context, $blocks);
        echo "
        <b class=\"caret\"></b>
    </a>
";
        
        $__internal_a2ff720b9e4747d7cc5dfa47a6d6bb01d09fbde60cfd33f37e8fe8a400d7a186->leave($__internal_a2ff720b9e4747d7cc5dfa47a6d6bb01d09fbde60cfd33f37e8fe8a400d7a186_prof);

        
        $__internal_8be404435260303a9051440212bba84c5f12bc2e32805fd728eed60eb4a5d1ba->leave($__internal_8be404435260303a9051440212bba84c5f12bc2e32805fd728eed60eb4a5d1ba_prof);

    }

    // line 118
    public function block_label($context, array $blocks = array())
    {
        $__internal_3a069a6ee775372cb6acbe00a56a90d7ba19feaf35e8eef483562319c2b5e94a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3a069a6ee775372cb6acbe00a56a90d7ba19feaf35e8eef483562319c2b5e94a->enter($__internal_3a069a6ee775372cb6acbe00a56a90d7ba19feaf35e8eef483562319c2b5e94a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        $__internal_be8245c9d0bf8a6b4b4c69c1708c865affb8c00ee36a4c76293b4706cddba75d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_be8245c9d0bf8a6b4b4c69c1708c865affb8c00ee36a4c76293b4706cddba75d->enter($__internal_be8245c9d0bf8a6b4b4c69c1708c865affb8c00ee36a4c76293b4706cddba75d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "label"));

        // line 119
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(        // line 120
($context["item"] ?? $this->getContext($context, "item")), "label", array()), $this->getAttribute(        // line 121
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_params", 1 => array()), "method"), $this->getAttribute(        // line 122
($context["item"] ?? $this->getContext($context, "item")), "getExtra", array(0 => "translation_domain", 1 => (($this->getAttribute(        // line 124
($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method")) ? ($this->getAttribute($this->getAttribute(($context["item"] ?? $this->getContext($context, "item")), "getParent", array(), "method"), "getExtra", array(0 => "translation_domain"), "method")) : (null))), "method")), "html", null, true);
        
        $__internal_be8245c9d0bf8a6b4b4c69c1708c865affb8c00ee36a4c76293b4706cddba75d->leave($__internal_be8245c9d0bf8a6b4b4c69c1708c865affb8c00ee36a4c76293b4706cddba75d_prof);

        
        $__internal_3a069a6ee775372cb6acbe00a56a90d7ba19feaf35e8eef483562319c2b5e94a->leave($__internal_3a069a6ee775372cb6acbe00a56a90d7ba19feaf35e8eef483562319c2b5e94a_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/Core/tab_menu_template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  347 => 124,  346 => 122,  345 => 121,  344 => 120,  343 => 119,  334 => 118,  319 => 113,  313 => 111,  311 => 110,  306 => 109,  304 => 108,  302 => 107,  300 => 106,  298 => 105,  296 => 104,  287 => 103,  273 => 99,  267 => 97,  265 => 96,  260 => 95,  251 => 94,  237 => 90,  231 => 88,  229 => 87,  222 => 86,  213 => 85,  201 => 81,  197 => 79,  195 => 78,  186 => 77,  173 => 72,  171 => 71,  166 => 68,  162 => 65,  158 => 63,  156 => 62,  153 => 61,  151 => 60,  147 => 59,  144 => 57,  142 => 56,  139 => 54,  137 => 53,  134 => 51,  131 => 49,  129 => 48,  127 => 47,  124 => 45,  122 => 44,  120 => 43,  117 => 41,  114 => 39,  112 => 38,  109 => 36,  107 => 35,  103 => 31,  101 => 30,  99 => 29,  97 => 28,  95 => 27,  91 => 25,  89 => 24,  87 => 23,  85 => 22,  82 => 21,  80 => 19,  77 => 17,  73 => 15,  71 => 14,  69 => 12,  66 => 10,  64 => 9,  62 => 8,  60 => 7,  58 => 6,  56 => 5,  54 => 4,  45 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'knp_menu.html.twig' %}

{% block item %}
{% import \"knp_menu.html.twig\" as macros %}
{% if item.displayed %}
    {%- set attributes = item.attributes %}
    {%- set is_dropdown = attributes.dropdown|default(false) %}
    {%- set divider_prepend = attributes.divider_prepend|default(false) %}
    {%- set divider_append = attributes.divider_append|default(false) %}

{# unset bootstrap specific attributes #}
    {%- set attributes = attributes|merge({'dropdown': null, 'divider_prepend': null, 'divider_append': null }) %}

    {%- if divider_prepend %}
        {{ block('dividerElement') }}
    {%- endif %}

{# building the class of the item #}
    {%- set classes = item.attribute('class') is not empty ? [item.attribute('class')] : [] %}

    {%- if matcher is defined %} {# KnpMenu 2.0#}
        {%- if matcher.isCurrent(item) %}
            {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif matcher.isAncestor(item, options.depth) %}
            {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- else %} {# KnpMenu 1.X #}
        {%- if item.current %}
        {%- set classes = classes|merge([options.currentClass]) %}
        {%- elseif item.currentAncestor %}
        {%- set classes = classes|merge([options.ancestorClass]) %}
        {%- endif %}
    {%- endif %}

    {%- if item.actsLikeFirst %}
        {%- set classes = classes|merge([options.firstClass]) %}
    {%- endif %}
    {%- if item.actsLikeLast %}
        {%- set classes = classes|merge([options.lastClass]) %}
    {%- endif %}

{# building the class of the children #}
    {%- set childrenClasses = item.childrenAttribute('class') is not empty ? [item.childrenAttribute('class')] : [] %}
    {%- set childrenClasses = childrenClasses|merge(['menu_level_' ~ item.level]) %}

{# adding classes for dropdown #}
    {%- if is_dropdown %}
        {%- set classes = classes|merge(['dropdown']) %}
        {%- set childrenClasses = childrenClasses|merge(['dropdown-menu']) %}
    {%- endif %}

{# putting classes together #}
    {%- if classes is not empty %}
        {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- endif %}
    {%- set listAttributes = item.childrenAttributes|merge({'class': childrenClasses|join(' ') }) %}

{# displaying the item #}
    <li{{ macros.attributes(attributes) }}>
        {%- if is_dropdown %}
            {{ block('dropdownElement') }}
        {%- elseif item.uri is not empty and (not item.current or options.currentAsLink) %}
            {{ block('linkElement') }}
        {%- else %}
            {{ block('spanElement') }}
        {%- endif %}
{# render the list of children#}
        {{ block('list') }}
    </li>

    {%- if divider_append %}
        {{ block('dividerElement') }}
    {%- endif %}
{% endif %}
{% endblock %}

{% block dividerElement %}
{% if item.level == 1 %}
    <li class=\"divider-vertical\"></li>
{% else %}
    <li class=\"divider\"></li>
{% endif %}
{% endblock %}

{% block linkElement %}
    <a href=\"{{ item.uri }}\"{{ macros.attributes(item.linkAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </a>
{% endblock %}

{% block spanElement %}
    <span {{ macros.attributes(item.labelAttributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
    </span>
{% endblock %}

{% block dropdownElement %}
    {%- set classes = item.linkAttribute('class') is not empty ? [item.linkAttribute('class')] : [] %}
    {%- set classes = classes|merge(['dropdown-toggle']) %}
    {%- set attributes = item.linkAttributes %}
    {%- set attributes = attributes|merge({'class': classes|join(' ')}) %}
    {%- set attributes = attributes|merge({'data-toggle': 'dropdown'}) %}
    <a href=\"#\"{{ macros.attributes(attributes) }}>
        {% if item.attribute('icon') is not empty  %}
            <i class=\"{{ item.attribute('icon') }}\"></i>
        {% endif %}
        {{ block('label') }}
        <b class=\"caret\"></b>
    </a>
{% endblock %}

{% block label %}
{{-
    item.label|trans(
        item.getExtra('translation_params', {}),
        item.getExtra(
            'translation_domain',
            item.getParent() ? item.getParent().getExtra('translation_domain') : null
        )
    )
-}}
{% endblock %}
", "@SonataAdmin/Core/tab_menu_template.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/Core/tab_menu_template.html.twig");
    }
}
