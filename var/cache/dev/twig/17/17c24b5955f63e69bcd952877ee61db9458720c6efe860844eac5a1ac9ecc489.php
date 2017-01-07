<?php

/* SonataAdminBundle:CRUD:base_show.html.twig */
class __TwigTemplate_dea386bc1d16dbc5414f456041e89ea4dc3b2f5e87f5762e2891e889c87e9938 extends Twig_Template
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
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_show.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_f99a8f5d2fa2688e661aa5763e9f2ee121ddbfd2c01a6a1450a9908f9e3948d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f99a8f5d2fa2688e661aa5763e9f2ee121ddbfd2c01a6a1450a9908f9e3948d5->enter($__internal_f99a8f5d2fa2688e661aa5763e9f2ee121ddbfd2c01a6a1450a9908f9e3948d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $__internal_a42277979046ec2421d3575268951f489733a283a077bc4bc3ceb485bd078054 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a42277979046ec2421d3575268951f489733a283a077bc4bc3ceb485bd078054->enter($__internal_a42277979046ec2421d3575268951f489733a283a077bc4bc3ceb485bd078054_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_show.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_f99a8f5d2fa2688e661aa5763e9f2ee121ddbfd2c01a6a1450a9908f9e3948d5->leave($__internal_f99a8f5d2fa2688e661aa5763e9f2ee121ddbfd2c01a6a1450a9908f9e3948d5_prof);

        
        $__internal_a42277979046ec2421d3575268951f489733a283a077bc4bc3ceb485bd078054->leave($__internal_a42277979046ec2421d3575268951f489733a283a077bc4bc3ceb485bd078054_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_2a360689e47fcf7c6cbbc3739d62f02ba7a99f8ae1201588085a2f693a750241 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2a360689e47fcf7c6cbbc3739d62f02ba7a99f8ae1201588085a2f693a750241->enter($__internal_2a360689e47fcf7c6cbbc3739d62f02ba7a99f8ae1201588085a2f693a750241_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_265f1b52f2f3f3939d501a50cfd72c023cee966a85ffc2bd95526fdb08509697 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_265f1b52f2f3f3939d501a50cfd72c023cee966a85ffc2bd95526fdb08509697->enter($__internal_265f1b52f2f3f3939d501a50cfd72c023cee966a85ffc2bd95526fdb08509697_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_show.html.twig", 15)->display($context);
        
        $__internal_265f1b52f2f3f3939d501a50cfd72c023cee966a85ffc2bd95526fdb08509697->leave($__internal_265f1b52f2f3f3939d501a50cfd72c023cee966a85ffc2bd95526fdb08509697_prof);

        
        $__internal_2a360689e47fcf7c6cbbc3739d62f02ba7a99f8ae1201588085a2f693a750241->leave($__internal_2a360689e47fcf7c6cbbc3739d62f02ba7a99f8ae1201588085a2f693a750241_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_91fdea9cd4b28933e5ef4b7adb7471a70579a76c1c56756b87f4c227a410e90c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_91fdea9cd4b28933e5ef4b7adb7471a70579a76c1c56756b87f4c227a410e90c->enter($__internal_91fdea9cd4b28933e5ef4b7adb7471a70579a76c1c56756b87f4c227a410e90c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_2595088cda574c3e7ec100b4bdfc535cf8fee092326381aa8a31c9b95fdb55a8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2595088cda574c3e7ec100b4bdfc535cf8fee092326381aa8a31c9b95fdb55a8->enter($__internal_2595088cda574c3e7ec100b4bdfc535cf8fee092326381aa8a31c9b95fdb55a8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        // line 19
        echo "    ";
        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "sidemenu", array(0 => (isset($context["action"]) ? $context["action"] : $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(        // line 21
(isset($context["sonata_admin"]) ? $context["sonata_admin"] : $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        // line 22
        echo "
";
        
        $__internal_2595088cda574c3e7ec100b4bdfc535cf8fee092326381aa8a31c9b95fdb55a8->leave($__internal_2595088cda574c3e7ec100b4bdfc535cf8fee092326381aa8a31c9b95fdb55a8_prof);

        
        $__internal_91fdea9cd4b28933e5ef4b7adb7471a70579a76c1c56756b87f4c227a410e90c->leave($__internal_91fdea9cd4b28933e5ef4b7adb7471a70579a76c1c56756b87f4c227a410e90c_prof);

    }

    // line 25
    public function block_show($context, array $blocks = array())
    {
        $__internal_12ebc6cae51e059c01e2d9e547b3efcdcaf2188cc22ec35b8a3897da85674a8a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_12ebc6cae51e059c01e2d9e547b3efcdcaf2188cc22ec35b8a3897da85674a8a->enter($__internal_12ebc6cae51e059c01e2d9e547b3efcdcaf2188cc22ec35b8a3897da85674a8a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_9123a6e8abbdc2270a0442549272b0b6531c3e633d25de07796a8fa3ca1ded80 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9123a6e8abbdc2270a0442549272b0b6531c3e633d25de07796a8fa3ca1ded80->enter($__internal_9123a6e8abbdc2270a0442549272b0b6531c3e633d25de07796a8fa3ca1ded80_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        // line 26
        echo "    <div class=\"sonata-ba-view\">

        ";
        // line 28
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.top", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "

        ";
        // line 30
        $context["has_tab"] = (((twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) == 1) && ($this->getAttribute(twig_get_array_keys_filter($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())), 0, array(), "array") != "default")) || (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array())) > 1));
        // line 31
        echo "
        ";
        // line 32
        if ((isset($context["has_tab"]) ? $context["has_tab"] : $this->getContext($context, "has_tab"))) {
            // line 33
            echo "            <div class=\"nav-tabs-custom\">
                <ul class=\"nav nav-tabs\" role=\"tablist\">
                    ";
            // line 35
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "_";
                echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
                echo "\" data-toggle=\"tab\">
                                <i class=\"fa fa-exclamation-circle has-errors hide\" aria-hidden=\"true\"></i>
                                ";
                // line 39
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($context["name"], array(), (($this->getAttribute($context["show_tab"], "translation_domain", array())) ? ($this->getAttribute($context["show_tab"], "translation_domain", array())) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()));
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
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
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
(isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()))) {
            // line 66
            echo "            ";
            $context["groups"] = $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showtabs", array()), "default", array()), "groups", array());
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
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.show.bottom", array("admin" => (isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "object" => (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")))));
        echo "
";
        
        $__internal_9123a6e8abbdc2270a0442549272b0b6531c3e633d25de07796a8fa3ca1ded80->leave($__internal_9123a6e8abbdc2270a0442549272b0b6531c3e633d25de07796a8fa3ca1ded80_prof);

        
        $__internal_12ebc6cae51e059c01e2d9e547b3efcdcaf2188cc22ec35b8a3897da85674a8a->leave($__internal_12ebc6cae51e059c01e2d9e547b3efcdcaf2188cc22ec35b8a3897da85674a8a_prof);

    }

    // line 75
    public function block_show_groups($context, array $blocks = array())
    {
        $__internal_ea8407622f85784615ee9932f072267f393e440f9b247b129642c8c24971cd4f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ea8407622f85784615ee9932f072267f393e440f9b247b129642c8c24971cd4f->enter($__internal_ea8407622f85784615ee9932f072267f393e440f9b247b129642c8c24971cd4f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        $__internal_e5796870dd202354954caf5c012ef144064415f9152ccb465411066377da0a5f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e5796870dd202354954caf5c012ef144064415f9152ccb465411066377da0a5f->enter($__internal_e5796870dd202354954caf5c012ef144064415f9152ccb465411066377da0a5f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_groups"));

        // line 76
        echo "    <div class=\"row\">
        ";
        // line 77
        $this->displayBlock('field_row', $context, $blocks);
        // line 109
        echo "
    </div>
";
        
        $__internal_e5796870dd202354954caf5c012ef144064415f9152ccb465411066377da0a5f->leave($__internal_e5796870dd202354954caf5c012ef144064415f9152ccb465411066377da0a5f_prof);

        
        $__internal_ea8407622f85784615ee9932f072267f393e440f9b247b129642c8c24971cd4f->leave($__internal_ea8407622f85784615ee9932f072267f393e440f9b247b129642c8c24971cd4f_prof);

    }

    // line 77
    public function block_field_row($context, array $blocks = array())
    {
        $__internal_f7a558dcfc0a3d94b3e495a31e8fc95dc3fed7485cfe0ae9ab089fcf68889435 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_f7a558dcfc0a3d94b3e495a31e8fc95dc3fed7485cfe0ae9ab089fcf68889435->enter($__internal_f7a558dcfc0a3d94b3e495a31e8fc95dc3fed7485cfe0ae9ab089fcf68889435_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        $__internal_677046a98feb5963f7642874c753730860fa633a28a5305e1945b2646e111796 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_677046a98feb5963f7642874c753730860fa633a28a5305e1945b2646e111796->enter($__internal_677046a98feb5963f7642874c753730860fa633a28a5305e1945b2646e111796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field_row"));

        // line 78
        echo "            ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["groups"]) ? $context["groups"] : $this->getContext($context, "groups")));
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
            $context["show_group"] = $this->getAttribute($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "showgroups", array()), $context["code"], array(), "array");
            // line 80
            echo "
                <div class=\"";
            // line 81
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "class", array()), "col-md-12")) : ("col-md-12")), "html", null, true);
            echo " ";
            echo ((((array_key_exists("no_padding", $context)) ? (_twig_default_filter((isset($context["no_padding"]) ? $context["no_padding"] : $this->getContext($context, "no_padding")), false)) : (false))) ? ("nopadding") : (""));
            echo "\">
                    <div class=\"";
            // line 82
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "box_class", array()), "html", null, true);
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
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "fields", array()));
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
        
        $__internal_677046a98feb5963f7642874c753730860fa633a28a5305e1945b2646e111796->leave($__internal_677046a98feb5963f7642874c753730860fa633a28a5305e1945b2646e111796_prof);

        
        $__internal_f7a558dcfc0a3d94b3e495a31e8fc95dc3fed7485cfe0ae9ab089fcf68889435->leave($__internal_f7a558dcfc0a3d94b3e495a31e8fc95dc3fed7485cfe0ae9ab089fcf68889435_prof);

    }

    // line 85
    public function block_show_title($context, array $blocks = array())
    {
        $__internal_343b04ae9f18d9a84dd55b2262cb62c556a8af11d920f4d1df81153349bf79f5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_343b04ae9f18d9a84dd55b2262cb62c556a8af11d920f4d1df81153349bf79f5->enter($__internal_343b04ae9f18d9a84dd55b2262cb62c556a8af11d920f4d1df81153349bf79f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        $__internal_ea8585169211700d876bf18a97cae2087c57bf099411ee3f56b2d7f0777dc0dd = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea8585169211700d876bf18a97cae2087c57bf099411ee3f56b2d7f0777dc0dd->enter($__internal_ea8585169211700d876bf18a97cae2087c57bf099411ee3f56b2d7f0777dc0dd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_title"));

        // line 86
        echo "                                    ";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : $this->getContext($context, "show_group")), "name", array()), array(), (($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute((isset($context["show_group"]) ? $context["show_group"] : null), "translation_domain", array()), $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
        echo "
                                ";
        
        $__internal_ea8585169211700d876bf18a97cae2087c57bf099411ee3f56b2d7f0777dc0dd->leave($__internal_ea8585169211700d876bf18a97cae2087c57bf099411ee3f56b2d7f0777dc0dd_prof);

        
        $__internal_343b04ae9f18d9a84dd55b2262cb62c556a8af11d920f4d1df81153349bf79f5->leave($__internal_343b04ae9f18d9a84dd55b2262cb62c556a8af11d920f4d1df81153349bf79f5_prof);

    }

    // line 94
    public function block_show_field($context, array $blocks = array())
    {
        $__internal_20d07d3006cc964418c628fd61e6c27521762f02ab47a1b257810307d3ee0dc5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_20d07d3006cc964418c628fd61e6c27521762f02ab47a1b257810307d3ee0dc5->enter($__internal_20d07d3006cc964418c628fd61e6c27521762f02ab47a1b257810307d3ee0dc5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        $__internal_cb1231f4b93b5230376cbc2ad721bc0d3ae0d4a957a20ebedd85be16729ae58e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cb1231f4b93b5230376cbc2ad721bc0d3ae0d4a957a20ebedd85be16729ae58e->enter($__internal_cb1231f4b93b5230376cbc2ad721bc0d3ae0d4a957a20ebedd85be16729ae58e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show_field"));

        // line 95
        echo "                                        <tr class=\"sonata-ba-view-container\">
                                            ";
        // line 96
        if ($this->getAttribute((isset($context["elements"]) ? $context["elements"] : null), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array", true, true)) {
            // line 97
            echo "                                                ";
            echo $this->env->getExtension('Sonata\AdminBundle\Twig\Extension\SonataAdminExtension')->renderViewElement($this->env, $this->getAttribute((isset($context["elements"]) ? $context["elements"] : $this->getContext($context, "elements")), (isset($context["field_name"]) ? $context["field_name"] : $this->getContext($context, "field_name")), array(), "array"), (isset($context["object"]) ? $context["object"] : $this->getContext($context, "object")));
            echo "
                                            ";
        }
        // line 99
        echo "                                        </tr>
                                    ";
        
        $__internal_cb1231f4b93b5230376cbc2ad721bc0d3ae0d4a957a20ebedd85be16729ae58e->leave($__internal_cb1231f4b93b5230376cbc2ad721bc0d3ae0d4a957a20ebedd85be16729ae58e_prof);

        
        $__internal_20d07d3006cc964418c628fd61e6c27521762f02ab47a1b257810307d3ee0dc5->leave($__internal_20d07d3006cc964418c628fd61e6c27521762f02ab47a1b257810307d3ee0dc5_prof);

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
", "SonataAdminBundle:CRUD:base_show.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_show.html.twig");
    }
}
