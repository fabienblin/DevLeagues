<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_d9968a268410ab30cbe7fcff4a1aa59760bc9d4fec67706d078e9a27451e1037 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'show' => array($this, 'block_show'),
            'show_groups' => array($this, 'block_show_groups'),
            'field_row' => array($this, 'block_field_row'),
            'show_title' => array($this, 'block_show_title'),
            'show_field' => array($this, 'block_show_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ada855a254d3fe9393282b21cd77939c9687eb864e38b971e857dae63c5fc9a8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ada855a254d3fe9393282b21cd77939c9687eb864e38b971e857dae63c5fc9a8->enter($__internal_ada855a254d3fe9393282b21cd77939c9687eb864e38b971e857dae63c5fc9a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_077d2fbd9f1b7e165a99d556b6ed92ca6bdbd1697ef42afec81405cb25e6a5da = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_077d2fbd9f1b7e165a99d556b6ed92ca6bdbd1697ef42afec81405cb25e6a5da->enter($__internal_077d2fbd9f1b7e165a99d556b6ed92ca6bdbd1697ef42afec81405cb25e6a5da_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ada855a254d3fe9393282b21cd77939c9687eb864e38b971e857dae63c5fc9a8->leave($__internal_ada855a254d3fe9393282b21cd77939c9687eb864e38b971e857dae63c5fc9a8_prof);

        
        $__internal_077d2fbd9f1b7e165a99d556b6ed92ca6bdbd1697ef42afec81405cb25e6a5da->leave($__internal_077d2fbd9f1b7e165a99d556b6ed92ca6bdbd1697ef42afec81405cb25e6a5da_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_bcfabda370cfeb3f8dd68add300cea3acfd44a0a5a1e01f774d88a31ef737ca4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bcfabda370cfeb3f8dd68add300cea3acfd44a0a5a1e01f774d88a31ef737ca4->enter($__internal_bcfabda370cfeb3f8dd68add300cea3acfd44a0a5a1e01f774d88a31ef737ca4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_ffc5c40c2116561d069fb91f5121682f0e7c1d7f59c0a2c0fe4f2ef90cdf1a1d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ffc5c40c2116561d069fb91f5121682f0e7c1d7f59c0a2c0fe4f2ef90cdf1a1d->enter($__internal_ffc5c40c2116561d069fb91f5121682f0e7c1d7f59c0a2c0fe4f2ef90cdf1a1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        
        $__internal_ffc5c40c2116561d069fb91f5121682f0e7c1d7f59c0a2c0fe4f2ef90cdf1a1d->leave($__internal_ffc5c40c2116561d069fb91f5121682f0e7c1d7f59c0a2c0fe4f2ef90cdf1a1d_prof);

        
        $__internal_bcfabda370cfeb3f8dd68add300cea3acfd44a0a5a1e01f774d88a31ef737ca4->leave($__internal_bcfabda370cfeb3f8dd68add300cea3acfd44a0a5a1e01f774d88a31ef737ca4_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_79d740993a9259f956d04f9389a8d99059edf655fb429a9f1186cd851ac421d0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_79d740993a9259f956d04f9389a8d99059edf655fb429a9f1186cd851ac421d0->enter($__internal_79d740993a9259f956d04f9389a8d99059edf655fb429a9f1186cd851ac421d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_2f40a5b2e4a7243ce5e4c5e3ad4f937ac41f71b587852d72c75a6e09ffffa705 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2f40a5b2e4a7243ce5e4c5e3ad4f937ac41f71b587852d72c75a6e09ffffa705->enter($__internal_2f40a5b2e4a7243ce5e4c5e3ad4f937ac41f71b587852d72c75a6e09ffffa705_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 21
($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 22
        echo "
";
        
        $__internal_2f40a5b2e4a7243ce5e4c5e3ad4f937ac41f71b587852d72c75a6e09ffffa705->leave($__internal_2f40a5b2e4a7243ce5e4c5e3ad4f937ac41f71b587852d72c75a6e09ffffa705_prof);

        
        $__internal_79d740993a9259f956d04f9389a8d99059edf655fb429a9f1186cd851ac421d0->leave($__internal_79d740993a9259f956d04f9389a8d99059edf655fb429a9f1186cd851ac421d0_prof);

    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        $__internal_147756f032a3764c5e3e3658c9674002fef170739ef52c59833ec4945453c4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_147756f032a3764c5e3e3658c9674002fef170739ef52c59833ec4945453c4bd->enter($__internal_147756f032a3764c5e3e3658c9674002fef170739ef52c59833ec4945453c4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_bb772d82c0e9ab582232ee273eb73126b22ae4752f5b0685f4302544dfdd798a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bb772d82c0e9ab582232ee273eb73126b22ae4752f5b0685f4302544dfdd798a->enter($__internal_bb772d82c0e9ab582232ee273eb73126b22ae4752f5b0685f4302544dfdd798a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "

        ";
        // line 30
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 31
        echo "
        ";
        // line 32
        if (($context["has_tab"] ?? $this->getContext($context, "has_tab"))) {
            // line 33
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["name"] => $context["show_tab"]) {
                // line 36
                echo "                        <li";
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " class=\"active\"";
                }
                echo ">
                            <a href=\"#tab_";
                // line 37
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                echo "
                            </a>
                        </li>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['name'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 43
            echo "                </ul>

                <div class=\"tab-content\">
                    ";
            // line 46
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["code"] => $context["show_tab"]) {
                // line 47
                echo "                        <div
                                class=\"tab-pane fade";
                // line 48
                if ($this->getAttribute($context["loop"], "first", array())) {
                    echo " in active";
                }
                echo "\"
                                id=\"tab_";
                // line 49
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    ";
                // line 53
                if (($this->getAttribute($context["show_tab"], "description", array()) != false)) {
                    // line 54
                    echo "                                        <p>";
                    echo $this->getAttribute($context["show_tab"], "description", array());
                    echo "</p>
                                    ";
                }
                // line 56
                echo "
                                    ";
                // line 57
                $context["groups"] = $this->getAttribute($context["show_tab"], "groups", array());
                // line 58
                echo "                                    ";
                $this->displayBlock("show_groups", $context, $blocks);
                echo "
                                </div>
                            </div>
                        </div>
                    ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['show_tab'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </div>
            </div>
        ";
        } elseif (twig_test_iterable($this->getAttribute(        // line 65
($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 66
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
            // line 67
            echo "            ";
            $this->displayBlock("show_groups", $context, $blocks);
            echo "
        ";
        }
        // line 69
        echo "
    </div>

    ";
        // line 72
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")), "object" => ($context["object"] ?? $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_bb772d82c0e9ab582232ee273eb73126b22ae4752f5b0685f4302544dfdd798a->leave($__internal_bb772d82c0e9ab582232ee273eb73126b22ae4752f5b0685f4302544dfdd798a_prof);

        
        $__internal_147756f032a3764c5e3e3658c9674002fef170739ef52c59833ec4945453c4bd->leave($__internal_147756f032a3764c5e3e3658c9674002fef170739ef52c59833ec4945453c4bd_prof);

    }

    // line 75
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_870ea8aab9f29b93ca6f0a58ba13c6cdd1df5e20adb15336833f957f0266916b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_870ea8aab9f29b93ca6f0a58ba13c6cdd1df5e20adb15336833f957f0266916b->enter($__internal_870ea8aab9f29b93ca6f0a58ba13c6cdd1df5e20adb15336833f957f0266916b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_833effe476ef5d00913ec570dc51d0e489f5c93dd17cba34806c7a9c2daf650b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_833effe476ef5d00913ec570dc51d0e489f5c93dd17cba34806c7a9c2daf650b->enter($__internal_833effe476ef5d00913ec570dc51d0e489f5c93dd17cba34806c7a9c2daf650b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 76
        echo "    <div class=\"row\">
        ";
        // line 77
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
    </div>
";
        
        $__internal_833effe476ef5d00913ec570dc51d0e489f5c93dd17cba34806c7a9c2daf650b->leave($__internal_833effe476ef5d00913ec570dc51d0e489f5c93dd17cba34806c7a9c2daf650b_prof);

        
        $__internal_870ea8aab9f29b93ca6f0a58ba13c6cdd1df5e20adb15336833f957f0266916b->leave($__internal_870ea8aab9f29b93ca6f0a58ba13c6cdd1df5e20adb15336833f957f0266916b_prof);

    }

    // line 77
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_98be2bb970abe7fe3e344616f934333acd6876b8fbfc701235d277cb84b51af3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_98be2bb970abe7fe3e344616f934333acd6876b8fbfc701235d277cb84b51af3->enter($__internal_98be2bb970abe7fe3e344616f934333acd6876b8fbfc701235d277cb84b51af3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_37d11eabbbea3a2d70ac703d6945c7f05b6fb5b1451bf58448d370828f14e453 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_37d11eabbbea3a2d70ac703d6945c7f05b6fb5b1451bf58448d370828f14e453->enter($__internal_37d11eabbbea3a2d70ac703d6945c7f05b6fb5b1451bf58448d370828f14e453_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["groups"] ?? $this->getContext($context, "groups")));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["code"]) {
            // line 79
            echo "                ";
            $context["show_group"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 80
            echo "
                <div class=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute(($context["show_group"] ?? null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter(($context["no_padding"] ?? $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
            echo "\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                ";
            // line 85
            $this->displayBlock('show_title', $context, $blocks);
            // line 88
            echo "                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                ";
            // line 93
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "fields", array()));
            $context['loop'] = array(
              'parent' => $context['_parent'],
              'index0' => 0,
              'index'  => 1,
              'first'  => true,
            );
            if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                $length = count($context['_seq']);
                $context['loop']['revindex0'] = $length - 1;
                $context['loop']['revindex'] = $length;
                $context['loop']['length'] = $length;
                $context['loop']['last'] = 1 === $length;
            }
            foreach ($context['_seq'] as $context["_key"] => $context["field_name"]) {
                // line 94
                echo "                                    ";
                $this->displayBlock('show_field', $context, $blocks);
                // line 101
                echo "                                ";
                ++$context['loop']['index0'];
                ++$context['loop']['index'];
                $context['loop']['first'] = false;
                if (isset($context['loop']['length'])) {
                    --$context['loop']['revindex0'];
                    --$context['loop']['revindex'];
                    $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 102
            echo "                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['code'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 108
        echo "        ";
        
        $__internal_37d11eabbbea3a2d70ac703d6945c7f05b6fb5b1451bf58448d370828f14e453->leave($__internal_37d11eabbbea3a2d70ac703d6945c7f05b6fb5b1451bf58448d370828f14e453_prof);

        
        $__internal_98be2bb970abe7fe3e344616f934333acd6876b8fbfc701235d277cb84b51af3->leave($__internal_98be2bb970abe7fe3e344616f934333acd6876b8fbfc701235d277cb84b51af3_prof);

    }

    // line 85
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_4992c5f8eb391aec56318fa67e1de663d18a60f60ba297d2661b2380fdd57c62 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4992c5f8eb391aec56318fa67e1de663d18a60f60ba297d2661b2380fdd57c62->enter($__internal_4992c5f8eb391aec56318fa67e1de663d18a60f60ba297d2661b2380fdd57c62_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_b6ed29ecfb329de5c8a8f20065336ff0fba146fb81127907a660f98f4de9e052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b6ed29ecfb329de5c8a8f20065336ff0fba146fb81127907a660f98f4de9e052->enter($__internal_b6ed29ecfb329de5c8a8f20065336ff0fba146fb81127907a660f98f4de9e052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 86
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute(($context["show_group"] ?? $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["show_group"] ?? null), "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_b6ed29ecfb329de5c8a8f20065336ff0fba146fb81127907a660f98f4de9e052->leave($__internal_b6ed29ecfb329de5c8a8f20065336ff0fba146fb81127907a660f98f4de9e052_prof);

        
        $__internal_4992c5f8eb391aec56318fa67e1de663d18a60f60ba297d2661b2380fdd57c62->leave($__internal_4992c5f8eb391aec56318fa67e1de663d18a60f60ba297d2661b2380fdd57c62_prof);

    }

    // line 94
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_392601b6b682ae44fb2fa0fd3ed8ae80be3f50b72814b04499473f5073d42e7e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_392601b6b682ae44fb2fa0fd3ed8ae80be3f50b72814b04499473f5073d42e7e->enter($__internal_392601b6b682ae44fb2fa0fd3ed8ae80be3f50b72814b04499473f5073d42e7e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_11f64f9794ee97cfec13d5e839f25ecf905ddf933aae62626b5e5250d31284bc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11f64f9794ee97cfec13d5e839f25ecf905ddf933aae62626b5e5250d31284bc->enter($__internal_11f64f9794ee97cfec13d5e839f25ecf905ddf933aae62626b5e5250d31284bc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 95
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 96
        if ($this->getAttribute(($context["elements"] ?? null), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 97
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute(($context["elements"] ?? $this->getContext($context, "elements")), ($context["field_name"] ?? $this->getContext($context, "field_name")), array(), "array"), ($context["object"] ?? $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 99
        echo "                                        </tr>
                                    ";
        
        $__internal_11f64f9794ee97cfec13d5e839f25ecf905ddf933aae62626b5e5250d31284bc->leave($__internal_11f64f9794ee97cfec13d5e839f25ecf905ddf933aae62626b5e5250d31284bc_prof);

        
        $__internal_392601b6b682ae44fb2fa0fd3ed8ae80be3f50b72814b04499473f5073d42e7e->leave($__internal_392601b6b682ae44fb2fa0fd3ed8ae80be3f50b72814b04499473f5073d42e7e_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  456 => 99,  450 => 97,  448 => 96,  445 => 95,  436 => 94,  423 => 86,  414 => 85,  404 => 108,  385 => 102,  371 => 101,  368 => 94,  351 => 93,  344 => 88,  342 => 85,  336 => 82,  330 => 81,  327 => 80,  324 => 79,  306 => 78,  297 => 77,  285 => 109,  283 => 77,  280 => 76,  271 => 75,  259 => 72,  254 => 69,  248 => 67,  245 => 66,  243 => 65,  239 => 63,  219 => 58,  217 => 57,  214 => 56,  208 => 54,  206 => 53,  197 => 49,  191 => 48,  188 => 47,  171 => 46,  166 => 43,  148 => 39,  141 => 37,  134 => 36,  117 => 35,  113 => 33,  111 => 32,  108 => 31,  106 => 30,  101 => 28,  97 => 26,  88 => 25,  77 => 22,  75 => 21,  73 => 19,  64 => 18,  54 => 15,  45 => 14,  24 => 12,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#

This file is part of the Sonata package.

(c) Thomas Rabaix <thomas.rabaix@sonata-project.org>

For the full copyright and license information, please view the LICENSE
file that was distributed with this source code.

#}

{% extends base_template %}

{%- block actions -%}
    {% include 'SonataAdminBundle:CRUD:action_buttons.html.twig' %}
{%- endblock -%}

{% block tab_menu %}
    {{ knp_menu_render(admin.sidemenu(action), {
        'currentClass' : 'active',
        'template': sonata_admin.adminPool.getTemplate('tab_menu_template')
    }, 'twig') }}
{% endblock %}

{% block show %}
    <div class=\"sonata-ba-view\">

        {{ sonata_block_render_event('sonata.admin.show.top', { 'admin': admin, 'object': object }) }}

        {% set has_tab = (admin.showtabs|length == 1 and admin.showtabs|keys[0] != 'default') or admin.showtabs|length > 1 %}

        {% if has_tab %}
            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    {% for name, show_tab in admin.showtabs %}
                        <li{% if loop.first %} class=\"active\"{% endif %}>
                            <a href=\"#tab_{{ admin.uniqid }}_{{ loop.index }}\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                {{ name|trans({}, show_tab.translation_domain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>

                <div class=\"tab-content\">
                    {% for code, show_tab in admin.showtabs %}
                        <div
                                class=\"tab-pane fade{% if loop.first %} in active{% endif %}\"
                                id=\"tab_{{ admin.uniqid }}_{{ loop.index }}\"
                        >
                            <div class=\"box-body  container-fluid\">
                                <div class=\"sonata-ba-collapsed-fields\">
                                    {% if show_tab.description != false %}
                                        <p>{{ show_tab.description|raw }}</p>
                                    {% endif %}

                                    {% set groups = show_tab.groups %}
                                    {{ block('show_groups') }}
                                </div>
                            </div>
                        </div>
                    {% endfor %}
                </div>
            </div>
        {% elseif admin.showtabs is iterable %}
            {% set groups = admin.showtabs.default.groups %}
            {{ block('show_groups') }}
        {% endif %}

    </div>

    {{ sonata_block_render_event('sonata.admin.show.bottom', { 'admin': admin, 'object': object }) }}
{% endblock %}

{% block show_groups %}
    <div class=\"row\">
        {% block field_row %}
            {% for code in groups %}
                {% set show_group = admin.showgroups[code] %}

                <div class=\"{{ show_group.class|default('col-md-12') }} {{ no_padding|default(false) ? 'nopadding' }}\">
                    <div class=\"{{ show_group.box_class }}\">
                        <div class=\"box-header\">
                            <h4 class=\"box-title\">
                                {% block show_title %}
                                    {{ show_group.name|trans({}, show_group.translation_domain|default(admin.translationDomain)) }}
                                {% endblock %}
                            </h4>
                        </div>
                        <div class=\"box-body table-responsive no-padding\">
                            <table class=\"table\">
                                <tbody>
                                {% for field_name in show_group.fields %}
                                    {% block show_field %}
                                        <tr class=\"sonata-ba-view-container\">
                                            {% if elements[field_name] is defined %}
                                                {{ elements[field_name]|render_view_element(object)}}
                                            {% endif %}
                                        </tr>
                                    {% endblock %}
                                {% endfor %}
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            {% endfor %}
        {% endblock %}

    </div>
{% endblock %}
", "SonataAdminBundle:CRUD:base_show.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
