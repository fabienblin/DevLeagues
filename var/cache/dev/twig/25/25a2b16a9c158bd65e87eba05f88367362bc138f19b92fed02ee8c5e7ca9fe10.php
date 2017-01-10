<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_608aa7752a53c4dd8cfff6008a7f0ee698b3555137e06edd7fcae8e6a0737cf4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'actions' => array($this, 'block_actions'),
            'tab_menu' => array($this, 'block_tab_menu'),
            'list_table' => array($this, 'block_list_table'),
            'list_header' => array($this, 'block_list_header'),
            'table_header' => array($this, 'block_table_header'),
            'table_body' => array($this, 'block_table_body'),
            'table_footer' => array($this, 'block_table_footer'),
            'no_result_content' => array($this, 'block_no_result_content'),
            'list_footer' => array($this, 'block_list_footer'),
            'batch' => array($this, 'block_batch'),
            'batch_javascript' => array($this, 'block_batch_javascript'),
            'batch_actions' => array($this, 'block_batch_actions'),
            'pager_results' => array($this, 'block_pager_results'),
            'pager_links' => array($this, 'block_pager_links'),
            'list_filters_actions' => array($this, 'block_list_filters_actions'),
            'list_filters' => array($this, 'block_list_filters'),
            'sonata_list_filter_group_class' => array($this, 'block_sonata_list_filter_group_class'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate(($context["base_template"] ?? $this->getContext($context, "base_template")), "SonataAdminBundle:CRUD:base_list.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_dd30a8e85c996c7b9812fe7efe8b5de5b3f0d5fbd67becc7f2fc07739d91a725 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd30a8e85c996c7b9812fe7efe8b5de5b3f0d5fbd67becc7f2fc07739d91a725->enter($__internal_dd30a8e85c996c7b9812fe7efe8b5de5b3f0d5fbd67becc7f2fc07739d91a725_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_5ad2177ca6128501eb6c8ee709d3bb8000846019d408e43329259e0d2c94abed = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5ad2177ca6128501eb6c8ee709d3bb8000846019d408e43329259e0d2c94abed->enter($__internal_5ad2177ca6128501eb6c8ee709d3bb8000846019d408e43329259e0d2c94abed_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_dd30a8e85c996c7b9812fe7efe8b5de5b3f0d5fbd67becc7f2fc07739d91a725->leave($__internal_dd30a8e85c996c7b9812fe7efe8b5de5b3f0d5fbd67becc7f2fc07739d91a725_prof);

        
        $__internal_5ad2177ca6128501eb6c8ee709d3bb8000846019d408e43329259e0d2c94abed->leave($__internal_5ad2177ca6128501eb6c8ee709d3bb8000846019d408e43329259e0d2c94abed_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_1ab9e73af268c0a8135aaf590d90855cb9592ede2c6bc144c678ee113ee3611b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ab9e73af268c0a8135aaf590d90855cb9592ede2c6bc144c678ee113ee3611b->enter($__internal_1ab9e73af268c0a8135aaf590d90855cb9592ede2c6bc144c678ee113ee3611b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_13dfaf66fd8279fa40b1fbf0b6661c514d017c5edd06b1c3609560bb406961b7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13dfaf66fd8279fa40b1fbf0b6661c514d017c5edd06b1c3609560bb406961b7->enter($__internal_13dfaf66fd8279fa40b1fbf0b6661c514d017c5edd06b1c3609560bb406961b7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_13dfaf66fd8279fa40b1fbf0b6661c514d017c5edd06b1c3609560bb406961b7->leave($__internal_13dfaf66fd8279fa40b1fbf0b6661c514d017c5edd06b1c3609560bb406961b7_prof);

        
        $__internal_1ab9e73af268c0a8135aaf590d90855cb9592ede2c6bc144c678ee113ee3611b->leave($__internal_1ab9e73af268c0a8135aaf590d90855cb9592ede2c6bc144c678ee113ee3611b_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_ace94bb08b835aef02655f932937edec3e99ebaa698914c4f36d85251e749443 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ace94bb08b835aef02655f932937edec3e99ebaa698914c4f36d85251e749443->enter($__internal_ace94bb08b835aef02655f932937edec3e99ebaa698914c4f36d85251e749443_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_c8567994fc774aba5906d662ad3ba5a76eee970c5098c68dbb2bda4cee363d4b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8567994fc774aba5906d662ad3ba5a76eee970c5098c68dbb2bda4cee363d4b->enter($__internal_c8567994fc774aba5906d662ad3ba5a76eee970c5098c68dbb2bda4cee363d4b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_c8567994fc774aba5906d662ad3ba5a76eee970c5098c68dbb2bda4cee363d4b->leave($__internal_c8567994fc774aba5906d662ad3ba5a76eee970c5098c68dbb2bda4cee363d4b_prof);

        
        $__internal_ace94bb08b835aef02655f932937edec3e99ebaa698914c4f36d85251e749443->leave($__internal_ace94bb08b835aef02655f932937edec3e99ebaa698914c4f36d85251e749443_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_95848bf6ffb134f7ced0f55e3549e70e780bcfa7be6f4e727aec183b43912931 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_95848bf6ffb134f7ced0f55e3549e70e780bcfa7be6f4e727aec183b43912931->enter($__internal_95848bf6ffb134f7ced0f55e3549e70e780bcfa7be6f4e727aec183b43912931_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_94ae22c5e5a82877254bd9e525084810ce76a2ac17570a5e0ae1eadfc8b5a3e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_94ae22c5e5a82877254bd9e525084810ce76a2ac17570a5e0ae1eadfc8b5a3e7->enter($__internal_94ae22c5e5a82877254bd9e525084810ce76a2ac17570a5e0ae1eadfc8b5a3e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        // line 21
        echo "    <div class=\"col-xs-12 col-md-12\">
        ";
        // line 22
        $context["batchactions"] = $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "batchactions", array());
        // line 23
        echo "        ";
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 24
            echo "            <form action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "batch", 1 => array("filter" => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "filterParameters", array()))), "method"), "html", null, true);
            echo "\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"";
            // line 25
            echo twig_escape_filter($this->env, ($context["csrf_token"] ?? $this->getContext($context, "csrf_token")), "html", null, true);
            echo "\">
        ";
        }
        // line 27
        echo "
        ";
        // line 29
        echo "        <div class=\"box box-primary\" ";
        if (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "lastPage", array()) == 1)) {
            echo "style=\"margin-bottom: 100px;\"";
        }
        echo ">
            <div class=\"box-body ";
        // line 30
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            echo "table-responsive no-padding";
        }
        echo "\">
                ";
        // line 31
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.top", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "

                ";
        // line 33
        $this->displayBlock('list_header', $context, $blocks);
        // line 34
        echo "
                ";
        // line 35
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 36
            echo "                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        ";
            // line 37
            $this->displayBlock('table_header', $context, $blocks);
            // line 73
            echo "
                        ";
            // line 74
            $this->displayBlock('table_body', $context, $blocks);
            // line 79
            echo "
                        ";
            // line 80
            $this->displayBlock('table_footer', $context, $blocks);
            // line 82
            echo "                    </table>
                ";
        } else {
            // line 84
            echo "                    ";
            $this->displayBlock('no_result_content', $context, $blocks);
            // line 100
            echo "                ";
        }
        // line 101
        echo "
                ";
        // line 102
        echo call_user_func_array($this->env->getFunction('sonata_block_render_event')->getCallable(), array("sonata.admin.list.table.bottom", array("admin" => ($context["admin"] ?? $this->getContext($context, "admin")))));
        echo "
            </div>
            ";
        // line 104
        $this->displayBlock('list_footer', $context, $blocks);
        // line 201
        echo "        </div>
        ";
        // line 202
        if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))))) {
            // line 203
            echo "            </form>
        ";
        }
        // line 205
        echo "    </div>
";
        
        $__internal_94ae22c5e5a82877254bd9e525084810ce76a2ac17570a5e0ae1eadfc8b5a3e7->leave($__internal_94ae22c5e5a82877254bd9e525084810ce76a2ac17570a5e0ae1eadfc8b5a3e7_prof);

        
        $__internal_95848bf6ffb134f7ced0f55e3549e70e780bcfa7be6f4e727aec183b43912931->leave($__internal_95848bf6ffb134f7ced0f55e3549e70e780bcfa7be6f4e727aec183b43912931_prof);

    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_a692d617bd07b9a16fe8e50019857711382921d48a424b73aac9845e8ad84f4d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a692d617bd07b9a16fe8e50019857711382921d48a424b73aac9845e8ad84f4d->enter($__internal_a692d617bd07b9a16fe8e50019857711382921d48a424b73aac9845e8ad84f4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_b48cdcdeb276c62d4e4ed9ae2320eb40eca365517f4118a258b129fec30cf404 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b48cdcdeb276c62d4e4ed9ae2320eb40eca365517f4118a258b129fec30cf404->enter($__internal_b48cdcdeb276c62d4e4ed9ae2320eb40eca365517f4118a258b129fec30cf404_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_b48cdcdeb276c62d4e4ed9ae2320eb40eca365517f4118a258b129fec30cf404->leave($__internal_b48cdcdeb276c62d4e4ed9ae2320eb40eca365517f4118a258b129fec30cf404_prof);

        
        $__internal_a692d617bd07b9a16fe8e50019857711382921d48a424b73aac9845e8ad84f4d->leave($__internal_a692d617bd07b9a16fe8e50019857711382921d48a424b73aac9845e8ad84f4d_prof);

    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_a56d0ff8259201305adf7bf4dc80c1e3ac91957a8267af403f965268098ef98f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a56d0ff8259201305adf7bf4dc80c1e3ac91957a8267af403f965268098ef98f->enter($__internal_a56d0ff8259201305adf7bf4dc80c1e3ac91957a8267af403f965268098ef98f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_b85d4b8f7f566e1cb9739d3508469097e49dc76eac4a6720ca5347ea42699f0b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b85d4b8f7f566e1cb9739d3508469097e49dc76eac4a6720ca5347ea42699f0b->enter($__internal_b85d4b8f7f566e1cb9739d3508469097e49dc76eac4a6720ca5347ea42699f0b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        // line 38
        echo "                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    ";
        // line 40
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "list", array()), "elements", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["field_description"]) {
            // line 41
            echo "                                        ";
            if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && ($this->getAttribute($context["field_description"], "getOption", array(0 => "code"), "method") == "_batch")) && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                // line 42
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        ";
            } elseif (($this->getAttribute(            // line 45
$context["field_description"], "getOption", array(0 => "code"), "method") == "_select")) {
                // line 46
                echo "                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        ";
            } elseif ((($this->getAttribute(            // line 47
$context["field_description"], "name", array()) == "_action") && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 48
                echo "                                            ";
                // line 49
                echo "                                        ";
            } elseif ((($this->getAttribute($context["field_description"], "getOption", array(0 => "ajax_hidden"), "method") == true) && $this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array()))) {
                // line 50
                echo "                                            ";
                // line 51
                echo "                                        ";
            } else {
                // line 52
                echo "                                            ";
                $context["sortable"] = false;
                // line 53
                echo "                                            ";
                if (($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "sortable", array(), "any", true, true) && $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "sortable", array()))) {
                    // line 54
                    echo "                                                ";
                    $context["sortable"] = true;
                    // line 55
                    echo "                                                ";
                    $context["sort_parameters"] = $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "sortparameters", array(0 => $context["field_description"], 1 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array())), "method");
                    // line 56
                    echo "                                                ";
                    $context["current"] = (($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()) == $context["field_description"]) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_by", array()), "fieldName", array()) == $this->getAttribute($this->getAttribute(($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters")), "filter", array()), "_sort_by", array())));
                    // line 57
                    echo "                                                ";
                    $context["sort_active_class"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ("sonata-ba-list-field-order-active") : (""));
                    // line 58
                    echo "                                                ";
                    $context["sort_by"] = ((($context["current"] ?? $this->getContext($context, "current"))) ? ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "values", array()), "_sort_order", array())) : ($this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "_sort_order", array())));
                    // line 59
                    echo "                                            ";
                }
                // line 60
                echo "
                                            ";
                // line 61
                ob_start();
                // line 62
                echo "                                                <th class=\"sonata-ba-list-field-header-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["field_description"], "type", array()), "html", null, true);
                echo " ";
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo " sonata-ba-list-field-header-order-";
                    echo twig_escape_filter($this->env, twig_lower_filter($this->env, ($context["sort_by"] ?? $this->getContext($context, "sort_by"))), "html", null, true);
                    echo " ";
                    echo twig_escape_filter($this->env, ($context["sort_active_class"] ?? $this->getContext($context, "sort_active_class")), "html", null, true);
                }
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_class", array(), "any", true, true)) {
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_class", array()), "html", null, true);
                }
                echo "\"";
                if ($this->getAttribute($this->getAttribute($context["field_description"], "options", array(), "any", false, true), "header_style", array(), "any", true, true)) {
                    echo " style=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($context["field_description"], "options", array()), "header_style", array()), "html", null, true);
                    echo "\"";
                }
                echo ">
                                                    ";
                // line 63
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "<a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => ($context["sort_parameters"] ?? $this->getContext($context, "sort_parameters"))), "method"), "html", null, true);
                    echo "\">";
                }
                // line 64
                echo "                                                    ";
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["field_description"], "label", array()), array(), $this->getAttribute($context["field_description"], "translationDomain", array())), "html", null, true);
                echo "
                                                    ";
                // line 65
                if (($context["sortable"] ?? $this->getContext($context, "sortable"))) {
                    echo "</a>";
                }
                // line 66
                echo "                                                </th>
                                            ";
                echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
                // line 68
                echo "                                        ";
            }
            // line 69
            echo "                                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field_description'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 70
        echo "                                </tr>
                            </thead>
                        ";
        
        $__internal_b85d4b8f7f566e1cb9739d3508469097e49dc76eac4a6720ca5347ea42699f0b->leave($__internal_b85d4b8f7f566e1cb9739d3508469097e49dc76eac4a6720ca5347ea42699f0b_prof);

        
        $__internal_a56d0ff8259201305adf7bf4dc80c1e3ac91957a8267af403f965268098ef98f->leave($__internal_a56d0ff8259201305adf7bf4dc80c1e3ac91957a8267af403f965268098ef98f_prof);

    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_8d626ab550ebae94bd8487b20fe578ca00b891b2432431cb72bc9d3df32e5b39 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8d626ab550ebae94bd8487b20fe578ca00b891b2432431cb72bc9d3df32e5b39->enter($__internal_8d626ab550ebae94bd8487b20fe578ca00b891b2432431cb72bc9d3df32e5b39_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_2d8080cf49afcd5e78ad5f0920137a146ee186ffd6daaa468d8e0f62c38a51ef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_2d8080cf49afcd5e78ad5f0920137a146ee186ffd6daaa468d8e0f62c38a51ef->enter($__internal_2d8080cf49afcd5e78ad5f0920137a146ee186ffd6daaa468d8e0f62c38a51ef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
        
        $__internal_2d8080cf49afcd5e78ad5f0920137a146ee186ffd6daaa468d8e0f62c38a51ef->leave($__internal_2d8080cf49afcd5e78ad5f0920137a146ee186ffd6daaa468d8e0f62c38a51ef_prof);

        
        $__internal_8d626ab550ebae94bd8487b20fe578ca00b891b2432431cb72bc9d3df32e5b39->leave($__internal_8d626ab550ebae94bd8487b20fe578ca00b891b2432431cb72bc9d3df32e5b39_prof);

    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_a660232a2a69953f8c1eb7f7d91dc58bcc1105a3b74660a011da9b518635ed07 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a660232a2a69953f8c1eb7f7d91dc58bcc1105a3b74660a011da9b518635ed07->enter($__internal_a660232a2a69953f8c1eb7f7d91dc58bcc1105a3b74660a011da9b518635ed07_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_aceb65dfad623702d833662e25d28e03e8efd84009c6e71a849e3e3f58e30378 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aceb65dfad623702d833662e25d28e03e8efd84009c6e71a849e3e3f58e30378->enter($__internal_aceb65dfad623702d833662e25d28e03e8efd84009c6e71a849e3e3f58e30378_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 81
        echo "                        ";
        
        $__internal_aceb65dfad623702d833662e25d28e03e8efd84009c6e71a849e3e3f58e30378->leave($__internal_aceb65dfad623702d833662e25d28e03e8efd84009c6e71a849e3e3f58e30378_prof);

        
        $__internal_a660232a2a69953f8c1eb7f7d91dc58bcc1105a3b74660a011da9b518635ed07->leave($__internal_a660232a2a69953f8c1eb7f7d91dc58bcc1105a3b74660a011da9b518635ed07_prof);

    }

    // line 84
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_58067594388436650f2e915b0cc1c2d70fc1cea94040ebc82c2a219bc44c7308 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58067594388436650f2e915b0cc1c2d70fc1cea94040ebc82c2a219bc44c7308->enter($__internal_58067594388436650f2e915b0cc1c2d70fc1cea94040ebc82c2a219bc44c7308_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_5cae51cf716e427afafb56ccbf033dd721f050d0a95dc68332028dc600921e6f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5cae51cf716e427afafb56ccbf033dd721f050d0a95dc68332028dc600921e6f->enter($__internal_5cae51cf716e427afafb56ccbf033dd721f050d0a95dc68332028dc600921e6f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        // line 85
        echo "                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">";
        // line 88
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("no_result", array(), "SonataAdminBundle"), "html", null, true);
        echo "</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    ";
        // line 93
        if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "xmlHttpRequest", array())) {
            // line 94
            echo "                                        ";
            $this->loadTemplate("SonataAdminBundle:Button:create_button.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 94)->display($context);
            // line 95
            echo "                                    ";
        }
        // line 96
        echo "                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    ";
        
        $__internal_5cae51cf716e427afafb56ccbf033dd721f050d0a95dc68332028dc600921e6f->leave($__internal_5cae51cf716e427afafb56ccbf033dd721f050d0a95dc68332028dc600921e6f_prof);

        
        $__internal_58067594388436650f2e915b0cc1c2d70fc1cea94040ebc82c2a219bc44c7308->leave($__internal_58067594388436650f2e915b0cc1c2d70fc1cea94040ebc82c2a219bc44c7308_prof);

    }

    // line 104
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_58cbc47918a54a929d3a670ca360411059a5d074fb96cd0ba179120086b603a3 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58cbc47918a54a929d3a670ca360411059a5d074fb96cd0ba179120086b603a3->enter($__internal_58cbc47918a54a929d3a670ca360411059a5d074fb96cd0ba179120086b603a3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_8986a911e38fe95b043e3f15dda3242315326e6d74da746e16517e418994a939 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8986a911e38fe95b043e3f15dda3242315326e6d74da746e16517e418994a939->enter($__internal_8986a911e38fe95b043e3f15dda3242315326e6d74da746e16517e418994a939_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        // line 105
        echo "                ";
        if ((twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "results", array())) > 0)) {
            // line 106
            echo "                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            ";
            // line 108
            if ( !$this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "isXmlHttpRequest", array())) {
                // line 109
                echo "                                <div class=\"pull-left\">
                                    ";
                // line 110
                if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "batch"), "method") && (twig_length_filter($this->env, ($context["batchactions"] ?? $this->getContext($context, "batchactions"))) > 0))) {
                    // line 111
                    echo "                                        ";
                    $this->displayBlock('batch', $context, $blocks);
                    // line 158
                    echo "                                    ";
                }
                // line 159
                echo "                                </div>


                                <div class=\"pull-right\">
                                    ";
                // line 163
                if ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "hasRoute", array(0 => "export"), "method") && $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isGranted", array(0 => "EXPORT"), "method")) && twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getExportFormats", array(), "method")))) {
                    // line 164
                    echo "                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                ";
                    // line 167
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("label_export_download", array(), "SonataAdminBundle"), "html", null, true);
                    echo "
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                ";
                    // line 171
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getExportFormats", array(), "method"));
                    foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                        // line 172
                        echo "                                                <li>
                                                    <a href=\"";
                        // line 173
                        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "export", 1 => ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "modelmanager", array()), "paginationparameters", array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), 1 => 0), "method") + array("format" => $context["format"]))), "method"), "html", null, true);
                        echo "\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        ";
                        // line 175
                        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans(("export_format_" . $context["format"]), array(), "SonataAdminBundle"), "html", null, true);
                        echo "
                                                    </a>
                                                <li>
                                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 179
                    echo "                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    ";
                }
                // line 184
                echo "
                                    ";
                // line 185
                $this->displayBlock('pager_results', $context, $blocks);
                // line 188
                echo "                                </div>
                            ";
            }
            // line 190
            echo "                        </div>

                        ";
            // line 192
            $this->displayBlock('pager_links', $context, $blocks);
            // line 198
            echo "                    </div>
                ";
        }
        // line 200
        echo "            ";
        
        $__internal_8986a911e38fe95b043e3f15dda3242315326e6d74da746e16517e418994a939->leave($__internal_8986a911e38fe95b043e3f15dda3242315326e6d74da746e16517e418994a939_prof);

        
        $__internal_58cbc47918a54a929d3a670ca360411059a5d074fb96cd0ba179120086b603a3->leave($__internal_58cbc47918a54a929d3a670ca360411059a5d074fb96cd0ba179120086b603a3_prof);

    }

    // line 111
    public function block_batch($context, array $blocks = array())
    {
        $__internal_bed06d3cd345a1424bb7f0c7fb9b46a5e9d12157e13aded18c2dec1c66f08bd4 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bed06d3cd345a1424bb7f0c7fb9b46a5e9d12157e13aded18c2dec1c66f08bd4->enter($__internal_bed06d3cd345a1424bb7f0c7fb9b46a5e9d12157e13aded18c2dec1c66f08bd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_f2c08d3742bfec7287af74947d34b441352d296e0acd3ef8a74d349268d7a6fe = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f2c08d3742bfec7287af74947d34b441352d296e0acd3ef8a74d349268d7a6fe->enter($__internal_f2c08d3742bfec7287af74947d34b441352d296e0acd3ef8a74d349268d7a6fe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        // line 112
        echo "                                            <script>
                                                ";
        // line 113
        $this->displayBlock('batch_javascript', $context, $blocks);
        // line 140
        echo "                                            </script>

                                        ";
        // line 142
        $this->displayBlock('batch_actions', $context, $blocks);
        // line 155
        echo "
                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"";
        // line 156
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_batch", array(), "SonataAdminBundle"), "html", null, true);
        echo "\">
                                        ";
        
        $__internal_f2c08d3742bfec7287af74947d34b441352d296e0acd3ef8a74d349268d7a6fe->leave($__internal_f2c08d3742bfec7287af74947d34b441352d296e0acd3ef8a74d349268d7a6fe_prof);

        
        $__internal_bed06d3cd345a1424bb7f0c7fb9b46a5e9d12157e13aded18c2dec1c66f08bd4->leave($__internal_bed06d3cd345a1424bb7f0c7fb9b46a5e9d12157e13aded18c2dec1c66f08bd4_prof);

    }

    // line 113
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_3d14d7d103d3521349ea820b21ba307d8aa985a23a4d5bd4b59242c30ef00552 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3d14d7d103d3521349ea820b21ba307d8aa985a23a4d5bd4b59242c30ef00552->enter($__internal_3d14d7d103d3521349ea820b21ba307d8aa985a23a4d5bd4b59242c30ef00552_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_64f2a84bf19f6c28c5260810e2a241478a27e5dcbc6e030398e6cdcaddf7a719 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_64f2a84bf19f6c28c5260810e2a241478a27e5dcbc6e030398e6cdcaddf7a719->enter($__internal_64f2a84bf19f6c28c5260810e2a241478a27e5dcbc6e030398e6cdcaddf7a719_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        // line 114
        echo "                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                ";
        
        $__internal_64f2a84bf19f6c28c5260810e2a241478a27e5dcbc6e030398e6cdcaddf7a719->leave($__internal_64f2a84bf19f6c28c5260810e2a241478a27e5dcbc6e030398e6cdcaddf7a719_prof);

        
        $__internal_3d14d7d103d3521349ea820b21ba307d8aa985a23a4d5bd4b59242c30ef00552->leave($__internal_3d14d7d103d3521349ea820b21ba307d8aa985a23a4d5bd4b59242c30ef00552_prof);

    }

    // line 142
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_9ae7bc55a219cc53cc5ff9dd6f69af8815f076e0d2c0b927404b5e623225b6d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9ae7bc55a219cc53cc5ff9dd6f69af8815f076e0d2c0b927404b5e623225b6d6->enter($__internal_9ae7bc55a219cc53cc5ff9dd6f69af8815f076e0d2c0b927404b5e623225b6d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_621a1eebb9c42a08b8dd6bd67fd3a16a21c5f8090b58b944bd7afc8455a96c4a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_621a1eebb9c42a08b8dd6bd67fd3a16a21c5f8090b58b944bd7afc8455a96c4a->enter($__internal_621a1eebb9c42a08b8dd6bd67fd3a16a21c5f8090b58b944bd7afc8455a96c4a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        // line 143
        echo "                                            <label class=\"checkbox\" for=\"";
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"";
        // line 144
        echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
        echo "_all_elements\">
                                                ";
        // line 145
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("all_elements", array(), "SonataAdminBundle"), "html", null, true);
        echo "
                                                (";
        // line 146
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "nbresults", array()), "html", null, true);
        echo ")
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                ";
        // line 150
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["batchactions"] ?? $this->getContext($context, "batchactions")));
        foreach ($context['_seq'] as $context["action"] => $context["options"]) {
            // line 151
            echo "                                                    <option value=\"";
            echo twig_escape_filter($this->env, $context["action"], "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["options"], "label", array()), array(), (($this->getAttribute($context["options"], "translation_domain", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["options"], "translation_domain", array()), $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array()))) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
            echo "</option>
                                                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['action'], $context['options'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 153
        echo "                                            </select>
                                        ";
        
        $__internal_621a1eebb9c42a08b8dd6bd67fd3a16a21c5f8090b58b944bd7afc8455a96c4a->leave($__internal_621a1eebb9c42a08b8dd6bd67fd3a16a21c5f8090b58b944bd7afc8455a96c4a_prof);

        
        $__internal_9ae7bc55a219cc53cc5ff9dd6f69af8815f076e0d2c0b927404b5e623225b6d6->leave($__internal_9ae7bc55a219cc53cc5ff9dd6f69af8815f076e0d2c0b927404b5e623225b6d6_prof);

    }

    // line 185
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_3ce0815be8886e14961fe173b68bd5fd7dbe6809d3421503d6b9baa638c96872 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3ce0815be8886e14961fe173b68bd5fd7dbe6809d3421503d6b9baa638c96872->enter($__internal_3ce0815be8886e14961fe173b68bd5fd7dbe6809d3421503d6b9baa638c96872_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_988ad0683cf3e05c210346c0ddd5e639d1c01cf3c4e0f21a2a9a3acef86c6cd4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_988ad0683cf3e05c210346c0ddd5e639d1c01cf3c4e0f21a2a9a3acef86c6cd4->enter($__internal_988ad0683cf3e05c210346c0ddd5e639d1c01cf3c4e0f21a2a9a3acef86c6cd4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 186
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 186)->display($context);
        // line 187
        echo "                                    ";
        
        $__internal_988ad0683cf3e05c210346c0ddd5e639d1c01cf3c4e0f21a2a9a3acef86c6cd4->leave($__internal_988ad0683cf3e05c210346c0ddd5e639d1c01cf3c4e0f21a2a9a3acef86c6cd4_prof);

        
        $__internal_3ce0815be8886e14961fe173b68bd5fd7dbe6809d3421503d6b9baa638c96872->leave($__internal_3ce0815be8886e14961fe173b68bd5fd7dbe6809d3421503d6b9baa638c96872_prof);

    }

    // line 192
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_1051e9681d63dc65bf3cf4c1adc5b3e0f652ee46e0958c5b3a3329040f8021ab = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1051e9681d63dc65bf3cf4c1adc5b3e0f652ee46e0958c5b3a3329040f8021ab->enter($__internal_1051e9681d63dc65bf3cf4c1adc5b3e0f652ee46e0958c5b3a3329040f8021ab_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_9a88ce2599e5aa1a8410e5812e94e3785d606f78276081c9fceaa7d89ab2b33b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_9a88ce2599e5aa1a8410e5812e94e3785d606f78276081c9fceaa7d89ab2b33b->enter($__internal_9a88ce2599e5aa1a8410e5812e94e3785d606f78276081c9fceaa7d89ab2b33b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        // line 193
        echo "                            ";
        if ($this->getAttribute($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "pager", array()), "haveToPaginate", array(), "method")) {
            // line 194
            echo "                                <hr/>
                                ";
            // line 195
            $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_links"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 195)->display($context);
            // line 196
            echo "                            ";
        }
        // line 197
        echo "                        ";
        
        $__internal_9a88ce2599e5aa1a8410e5812e94e3785d606f78276081c9fceaa7d89ab2b33b->leave($__internal_9a88ce2599e5aa1a8410e5812e94e3785d606f78276081c9fceaa7d89ab2b33b_prof);

        
        $__internal_1051e9681d63dc65bf3cf4c1adc5b3e0f652ee46e0958c5b3a3329040f8021ab->leave($__internal_1051e9681d63dc65bf3cf4c1adc5b3e0f652ee46e0958c5b3a3329040f8021ab_prof);

    }

    // line 208
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_e47507ecba7d776774b09a71ec67cf30e5957f3d4ae08f16e2679a6938d54ddf = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e47507ecba7d776774b09a71ec67cf30e5957f3d4ae08f16e2679a6938d54ddf->enter($__internal_e47507ecba7d776774b09a71ec67cf30e5957f3d4ae08f16e2679a6938d54ddf_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_32d1e89dcbc98eb9223a3f8ec22c46b3f3452250c734d61cee9ceab7cb129327 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_32d1e89dcbc98eb9223a3f8ec22c46b3f3452250c734d61cee9ceab7cb129327->enter($__internal_32d1e89dcbc98eb9223a3f8ec22c46b3f3452250c734d61cee9ceab7cb129327_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        // line 209
        if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))) {
            // line 210
            echo "        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    ";
            // line 215
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_filters", array(), "SonataAdminBundle"), "html", null, true);
            echo " <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    ";
            // line 219
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                if ((($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")))) {
                    // line 220
                    echo "                        ";
                    $context["filterActive"] = (($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                    // line 221
                    echo "                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                    // line 222
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                    echo "-";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                    echo "\" filter-container=\"filter-container-";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                    echo "\">
                                <i class=\"fa ";
                    // line 223
                    echo ((($this->getAttribute($context["filter"], "isActive", array(), "method") || $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) ? ("fa-check-square-o") : ("fa-square-o"));
                    echo "\"></i>";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "
                            </a>
                        </li>
                    ";
                }
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 227
            echo "                </ul>
            </li>
        </ul>
    ";
        }
        
        $__internal_32d1e89dcbc98eb9223a3f8ec22c46b3f3452250c734d61cee9ceab7cb129327->leave($__internal_32d1e89dcbc98eb9223a3f8ec22c46b3f3452250c734d61cee9ceab7cb129327_prof);

        
        $__internal_e47507ecba7d776774b09a71ec67cf30e5957f3d4ae08f16e2679a6938d54ddf->leave($__internal_e47507ecba7d776774b09a71ec67cf30e5957f3d4ae08f16e2679a6938d54ddf_prof);

    }

    // line 233
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_790f75e305126e5c306b1e1b2ea539b9f588ecd8c559c00ca1149a1b55a21779 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_790f75e305126e5c306b1e1b2ea539b9f588ecd8c559c00ca1149a1b55a21779->enter($__internal_790f75e305126e5c306b1e1b2ea539b9f588ecd8c559c00ca1149a1b55a21779_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_4ed40178fb402098bf033d6e2f40d013203fd7bb63d88e7960f3a1d6d77faf0f = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4ed40178fb402098bf033d6e2f40d013203fd7bb63d88e7960f3a1d6d77faf0f->enter($__internal_4ed40178fb402098bf033d6e2f40d013203fd7bb63d88e7960f3a1d6d77faf0f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        // line 234
        echo "    ";
        if ($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array())) {
            // line 235
            echo "        ";
            $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->setTheme(($context["form"] ?? $this->getContext($context, "form")), array(0 => $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "filter"), "method")));
            // line 236
            echo "
        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: ";
            // line 237
            echo (($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "hasDisplayableFilters", array())) ? ("block") : ("none"));
            echo "\" id=\"filter-container-";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
            echo "\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal ";
            // line 240
            echo ((($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isChild", array()) && (1 == twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()))))) ? ("hide") : (""));
            echo "\" action=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list"), "method"), "html", null, true);
            echo "\" method=\"GET\" role=\"form\">
                        ";
            // line 241
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'errors');
            echo "

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                ";
            // line 245
            $context["withAdvancedFilter"] = false;
            // line 246
            echo "                                ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "datagrid", array()), "filters", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["filter"]) {
                // line 247
                echo "                                    ";
                $context["filterActive"] = ((($this->getAttribute($context["filter"], "isActive", array(), "method") && (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array"))) || ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true)) &&  !$this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "isDefaultFilter", array(0 => $this->getAttribute($context["filter"], "formName", array())), "method"));
                // line 248
                echo "                                    ";
                $context["filterVisible"] = (($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array") === true) || (null === $this->getAttribute($this->getAttribute($context["filter"], "options", array()), "show_filter", array(), "array")));
                // line 249
                echo "                                    <div class=\"form-group ";
                $this->displayBlock('sonata_list_filter_group_class', $context, $blocks);
                echo "\" id=\"filter-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" sonata-filter=\"";
                echo ((($context["filterVisible"] ?? $this->getContext($context, "filterVisible"))) ? ("true") : ("false"));
                echo "\" style=\"display: ";
                if (($context["filterActive"] ?? $this->getContext($context, "filterActive"))) {
                    echo "block";
                } else {
                    echo "none";
                }
                echo "\">
                                        ";
                // line 250
                if ( !($this->getAttribute($context["filter"], "label", array()) === false)) {
                    // line 251
                    echo "                                            <label for=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), "vars", array()), "id", array()), "html", null, true);
                    echo "\" class=\"col-sm-3 control-label\">";
                    echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans($this->getAttribute($context["filter"], "label", array()), array(), (($this->getAttribute($context["filter"], "translationDomain", array())) ? ($this->getAttribute($context["filter"], "translationDomain", array())) : ($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "translationDomain", array())))), "html", null, true);
                    echo "</label>
                                        ";
                }
                // line 253
                echo "                                        ";
                $context["attr"] = (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? null), "children", array(), "any", false, true), $this->getAttribute($context["filter"], "formName", array()), array(), "array", false, true), "children", array(), "any", false, true), "type", array(), "array", false, true), "vars", array(), "any", false, true), "attr", array()), array())) : (array()));
                // line 254
                echo "
                                        <div class=\"col-sm-4 advanced-filter\">
                                            ";
                // line 256
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "type", array(), "array"), 'widget', array("attr" => ($context["attr"] ?? $this->getContext($context, "attr"))));
                echo "
                                        </div>

                                        <div class=\"col-sm-4\">
                                            ";
                // line 260
                echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), $this->getAttribute($context["filter"], "formName", array()), array(), "array"), "children", array()), "value", array(), "array"), 'widget');
                echo "
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array()), "html", null, true);
                echo "-";
                echo twig_escape_filter($this->env, $this->getAttribute($context["filter"], "name", array()), "html", null, true);
                echo "\" filter-container=\"filter-container-";
                echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "uniqid", array(), "method"), "html", null, true);
                echo "\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    ";
                // line 272
                if ($this->getAttribute($this->getAttribute($context["filter"], "options", array()), "advanced_filter", array(), "array")) {
                    // line 273
                    echo "                                        ";
                    $context["withAdvancedFilter"] = true;
                    // line 274
                    echo "                                    ";
                }
                // line 275
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['filter'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 276
            echo "                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                ";
            // line 280
            $context["foo"] = $this->getAttribute($this->getAttribute($this->getAttribute(($context["form"] ?? $this->getContext($context, "form")), "children", array()), "_page", array(), "array"), "setRendered", array(), "method");
            // line 281
            echo "                                ";
            echo $this->env->getRuntime('Symfony\Bridge\Twig\Form\TwigRenderer')->searchAndRenderBlock(($context["form"] ?? $this->getContext($context, "form")), 'rest');
            echo "

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> ";
            // line 285
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </button>

                                    <a class=\"btn btn-default\" href=\"";
            // line 288
            echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => array("filters" => "reset")), "method"), "html", null, true);
            echo "\">
                                        ";
            // line 289
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("link_reset_filter", array(), "SonataAdminBundle"), "html", null, true);
            echo "
                                    </a>
                                </div>

                                ";
            // line 293
            if (($context["withAdvancedFilter"] ?? $this->getContext($context, "withAdvancedFilter"))) {
                // line 294
                echo "                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            ";
                // line 297
                echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("btn_advanced_filters", array(), "SonataAdminBundle"), "html", null, true);
                echo "
                                        </a>
                                    </div>
                                ";
            }
            // line 301
            echo "                            </div>
                        </div>

                        ";
            // line 304
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "persistentParameters", array()));
            foreach ($context['_seq'] as $context["paramKey"] => $context["paramValue"]) {
                // line 305
                echo "                            <input type=\"hidden\" name=\"";
                echo twig_escape_filter($this->env, $context["paramKey"], "html", null, true);
                echo "\" value=\"";
                echo twig_escape_filter($this->env, $context["paramValue"], "html", null, true);
                echo "\">
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['paramKey'], $context['paramValue'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 307
            echo "                    </form>
                </div>
            </div>
        </div>
    ";
        }
        
        $__internal_4ed40178fb402098bf033d6e2f40d013203fd7bb63d88e7960f3a1d6d77faf0f->leave($__internal_4ed40178fb402098bf033d6e2f40d013203fd7bb63d88e7960f3a1d6d77faf0f_prof);

        
        $__internal_790f75e305126e5c306b1e1b2ea539b9f588ecd8c559c00ca1149a1b55a21779->leave($__internal_790f75e305126e5c306b1e1b2ea539b9f588ecd8c559c00ca1149a1b55a21779_prof);

    }

    // line 249
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_7aad5b8d705f7b37b69455172a4db1e6fecbaa1e7d7b65f3eef46391d95a7dbe = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_7aad5b8d705f7b37b69455172a4db1e6fecbaa1e7d7b65f3eef46391d95a7dbe->enter($__internal_7aad5b8d705f7b37b69455172a4db1e6fecbaa1e7d7b65f3eef46391d95a7dbe_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_13866b040f9b4157cf7c40583f27cfba88ab613802584ffd69c8297c96457879 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_13866b040f9b4157cf7c40583f27cfba88ab613802584ffd69c8297c96457879->enter($__internal_13866b040f9b4157cf7c40583f27cfba88ab613802584ffd69c8297c96457879_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_13866b040f9b4157cf7c40583f27cfba88ab613802584ffd69c8297c96457879->leave($__internal_13866b040f9b4157cf7c40583f27cfba88ab613802584ffd69c8297c96457879_prof);

        
        $__internal_7aad5b8d705f7b37b69455172a4db1e6fecbaa1e7d7b65f3eef46391d95a7dbe->leave($__internal_7aad5b8d705f7b37b69455172a4db1e6fecbaa1e7d7b65f3eef46391d95a7dbe_prof);

    }

    public function getTemplateName()
    {
        return "SonataAdminBundle:CRUD:base_list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1035 => 249,  1020 => 307,  1009 => 305,  1005 => 304,  1000 => 301,  993 => 297,  988 => 294,  986 => 293,  979 => 289,  975 => 288,  969 => 285,  961 => 281,  959 => 280,  953 => 276,  939 => 275,  936 => 274,  933 => 273,  931 => 272,  917 => 265,  909 => 260,  902 => 256,  898 => 254,  895 => 253,  887 => 251,  885 => 250,  868 => 249,  865 => 248,  862 => 247,  844 => 246,  842 => 245,  835 => 241,  829 => 240,  821 => 237,  818 => 236,  815 => 235,  812 => 234,  803 => 233,  789 => 227,  776 => 223,  768 => 222,  765 => 221,  762 => 220,  757 => 219,  750 => 215,  743 => 210,  741 => 209,  732 => 208,  722 => 197,  719 => 196,  717 => 195,  714 => 194,  711 => 193,  702 => 192,  692 => 187,  689 => 186,  680 => 185,  669 => 153,  658 => 151,  654 => 150,  647 => 146,  643 => 145,  639 => 144,  634 => 143,  625 => 142,  590 => 114,  581 => 113,  569 => 156,  566 => 155,  564 => 142,  560 => 140,  558 => 113,  555 => 112,  546 => 111,  536 => 200,  532 => 198,  530 => 192,  526 => 190,  522 => 188,  520 => 185,  517 => 184,  510 => 179,  500 => 175,  495 => 173,  492 => 172,  488 => 171,  481 => 167,  476 => 164,  474 => 163,  468 => 159,  465 => 158,  462 => 111,  460 => 110,  457 => 109,  455 => 108,  451 => 106,  448 => 105,  439 => 104,  426 => 96,  423 => 95,  420 => 94,  418 => 93,  410 => 88,  405 => 85,  396 => 84,  386 => 81,  377 => 80,  366 => 77,  364 => 76,  361 => 75,  352 => 74,  340 => 70,  334 => 69,  331 => 68,  327 => 66,  323 => 65,  318 => 64,  312 => 63,  290 => 62,  288 => 61,  285 => 60,  282 => 59,  279 => 58,  276 => 57,  273 => 56,  270 => 55,  267 => 54,  264 => 53,  261 => 52,  258 => 51,  256 => 50,  253 => 49,  251 => 48,  249 => 47,  246 => 46,  244 => 45,  239 => 42,  236 => 41,  232 => 40,  228 => 38,  219 => 37,  202 => 33,  191 => 205,  187 => 203,  185 => 202,  182 => 201,  180 => 104,  175 => 102,  172 => 101,  169 => 100,  166 => 84,  162 => 82,  160 => 80,  157 => 79,  155 => 74,  152 => 73,  150 => 37,  147 => 36,  145 => 35,  142 => 34,  140 => 33,  135 => 31,  129 => 30,  122 => 29,  119 => 27,  114 => 25,  109 => 24,  106 => 23,  104 => 22,  101 => 21,  92 => 20,  74 => 18,  64 => 15,  55 => 14,  34 => 12,);
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

{% block tab_menu %}{{ knp_menu_render(admin.sidemenu(action), {'currentClass' : 'active', 'template': sonata_admin.adminPool.getTemplate('tab_menu_template')}, 'twig') }}{% endblock %}

{% block list_table %}
    <div class=\"col-xs-12 col-md-12\">
        {% set batchactions = admin.batchactions %}
        {% if admin.hasRoute('batch') and batchactions|length %}
            <form action=\"{{ admin.generateUrl('batch', {'filter': admin.filterParameters}) }}\" method=\"POST\" >
            <input type=\"hidden\" name=\"_sonata_csrf_token\" value=\"{{ csrf_token }}\">
        {% endif %}

        {# Add a margin if no pager to prevent dropdown cropping on window #}
        <div class=\"box box-primary\" {% if admin.datagrid.pager.lastPage == 1 %}style=\"margin-bottom: 100px;\"{% endif %}>
            <div class=\"box-body {% if admin.datagrid.results|length > 0 %}table-responsive no-padding{% endif %}\">
                {{ sonata_block_render_event('sonata.admin.list.table.top', { 'admin': admin }) }}

                {% block list_header %}{% endblock %}

                {% if admin.datagrid.results|length > 0 %}
                    <table class=\"table table-bordered table-striped sonata-ba-list\">
                        {% block table_header %}
                            <thead>
                                <tr class=\"sonata-ba-list-field-header\">
                                    {% for field_description in admin.list.elements %}
                                        {% if admin.hasRoute('batch') and field_description.getOption('code') == '_batch' and batchactions|length > 0 %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-batch\">
                                              <input type=\"checkbox\" id=\"list_batch_checkbox\">
                                            </th>
                                        {% elseif field_description.getOption('code') == '_select' %}
                                            <th class=\"sonata-ba-list-field-header sonata-ba-list-field-header-select\"></th>
                                        {% elseif field_description.name == '_action' and app.request.isXmlHttpRequest %}
                                            {# Action buttons disabled in ajax view! #}
                                        {% elseif field_description.getOption('ajax_hidden') == true and app.request.isXmlHttpRequest %}
                                            {# Disable fields with 'ajax_hidden' option set to true #}
                                        {% else %}
                                            {% set sortable = false %}
                                            {% if field_description.options.sortable is defined and field_description.options.sortable %}
                                                {% set sortable             = true %}
                                                {% set sort_parameters      = admin.modelmanager.sortparameters(field_description, admin.datagrid) %}
                                                {% set current              = admin.datagrid.values._sort_by == field_description or admin.datagrid.values._sort_by.fieldName == sort_parameters.filter._sort_by %}
                                                {% set sort_active_class    = current ? 'sonata-ba-list-field-order-active' : '' %}
                                                {% set sort_by              = current ? admin.datagrid.values._sort_order : field_description.options._sort_order %}
                                            {% endif %}

                                            {% spaceless %}
                                                <th class=\"sonata-ba-list-field-header-{{ field_description.type}} {% if sortable %} sonata-ba-list-field-header-order-{{ sort_by|lower }} {{ sort_active_class }}{% endif %}{% if field_description.options.header_class is defined %} {{ field_description.options.header_class }}{% endif %}\"{% if field_description.options.header_style is defined %} style=\"{{ field_description.options.header_style }}\"{% endif %}>
                                                    {% if sortable %}<a href=\"{{ admin.generateUrl('list', sort_parameters) }}\">{% endif %}
                                                    {{ field_description.label|trans({}, field_description.translationDomain) }}
                                                    {% if sortable %}</a>{% endif %}
                                                </th>
                                            {% endspaceless %}
                                        {% endif %}
                                    {% endfor %}
                                </tr>
                            </thead>
                        {% endblock %}

                        {% block table_body %}
                            <tbody>
                                {% include admin.getTemplate('outer_list_rows_' ~ admin.getListMode()) %}
                            </tbody>
                        {% endblock %}

                        {% block table_footer %}
                        {% endblock %}
                    </table>
                {% else %}
                    {% block no_result_content %}
                        <div class=\"info-box\">
                            <span class=\"info-box-icon bg-aqua\"><i class=\"fa fa-arrow-circle-right\" aria-hidden=\"true\"></i></span>
                            <div class=\"info-box-content\">
                                <span class=\"info-box-text\">{{ 'no_result'|trans({}, 'SonataAdminBundle') }}</span>
                                <div class=\"progress\">
                                    <div class=\"progress-bar\" style=\"width: 0%\"></div>
                                </div>
                                <span class=\"progress-description\">
                                    {% if not app.request.xmlHttpRequest %}
                                        {% include 'SonataAdminBundle:Button:create_button.html.twig' %}
                                    {% endif %}
                                </span>
                            </div><!-- /.info-box-content -->
                        </div>
                    {% endblock %}
                {% endif %}

                {{ sonata_block_render_event('sonata.admin.list.table.bottom', { 'admin': admin }) }}
            </div>
            {% block list_footer %}
                {% if admin.datagrid.results|length > 0 %}
                    <div class=\"box-footer\">
                        <div class=\"form-inline clearfix\">
                            {% if not app.request.isXmlHttpRequest %}
                                <div class=\"pull-left\">
                                    {% if admin.hasRoute('batch') and batchactions|length > 0  %}
                                        {% block batch %}
                                            <script>
                                                {% block batch_javascript %}
                                                    jQuery(document).ready(function (\$) {
                                                        // Toggle individual checkboxes when the batch checkbox is changed
                                                        \$('#list_batch_checkbox').on('ifChanged change', function () {
                                                            var checkboxes = \$(this)
                                                                .closest('table')
                                                                .find('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            ;
                                                            if (window.SONATA_CONFIG.USE_ICHECK) {
                                                                checkboxes.iCheck(\$(this).is(':checked') ? 'check' : 'uncheck');
                                                            } else {
                                                                checkboxes.prop('checked', this.checked);
                                                            }
                                                        });

                                                        // Add a CSS class to rows when they are selected
                                                        \$('td.sonata-ba-list-field-batch input[type=\"checkbox\"], div.sonata-ba-list-field-batch input[type=\"checkbox\"]')
                                                            .on('ifChanged change', function () {
                                                                \$(this)
                                                                    .closest('tr, div.sonata-ba-list-field-batch')
                                                                    .toggleClass('sonata-ba-list-row-selected', \$(this).is(':checked'))
                                                                ;
                                                            })
                                                            .trigger('ifChanged')
                                                        ;
                                                    });
                                                {% endblock %}
                                            </script>

                                        {% block batch_actions %}
                                            <label class=\"checkbox\" for=\"{{ admin.uniqid }}_all_elements\">
                                                <input type=\"checkbox\" name=\"all_elements\" id=\"{{ admin.uniqid }}_all_elements\">
                                                {{ 'all_elements'|trans({}, 'SonataAdminBundle') }}
                                                ({{ admin.datagrid.pager.nbresults }})
                                            </label>

                                            <select name=\"action\" style=\"width: auto; height: auto\" class=\"form-control\">
                                                {% for action, options in batchactions %}
                                                    <option value=\"{{ action }}\">{{ options.label|trans({}, options.translation_domain|default(admin.translationDomain)) }}</option>
                                                {% endfor %}
                                            </select>
                                        {% endblock %}

                                            <input type=\"submit\" class=\"btn btn-small btn-primary\" value=\"{{ 'btn_batch'|trans({}, 'SonataAdminBundle') }}\">
                                        {% endblock %}
                                    {% endif %}
                                </div>


                                <div class=\"pull-right\">
                                    {% if admin.hasRoute('export') and admin.isGranted('EXPORT') and admin.getExportFormats()|length %}
                                        <div class=\"btn-group\">
                                            <button type=\"button\" class=\"btn btn-default dropdown-toggle\" data-toggle=\"dropdown\">
                                                <i class=\"fa fa-share-square-o\" aria-hidden=\"true\"></i>
                                                {{ \"label_export_download\"|trans({}, \"SonataAdminBundle\") }}
                                                <span class=\"caret\"></span>
                                            </button>
                                            <ul class=\"dropdown-menu\">
                                                {% for format in admin.getExportFormats() %}
                                                <li>
                                                    <a href=\"{{ admin.generateUrl('export', admin.modelmanager.paginationparameters(admin.datagrid, 0) + {'format' : format}) }}\">
                                                        <i class=\"fa fa-arrow-circle-o-down\" aria-hidden=\"true\"></i>
                                                        {{ (\"export_format_\" ~ format)|trans({}, 'SonataAdminBundle') }}
                                                    </a>
                                                <li>
                                                {% endfor %}
                                            </ul>
                                        </div>

                                        &nbsp;-&nbsp;
                                    {% endif %}

                                    {% block pager_results %}
                                        {% include admin.getTemplate('pager_results') %}
                                    {% endblock %}
                                </div>
                            {% endif %}
                        </div>

                        {% block pager_links %}
                            {% if admin.datagrid.pager.haveToPaginate() %}
                                <hr/>
                                {% include admin.getTemplate('pager_links') %}
                            {% endif %}
                        {% endblock %}
                    </div>
                {% endif %}
            {% endblock %}
        </div>
        {% if admin.hasRoute('batch') and batchactions|length %}
            </form>
        {% endif %}
    </div>
{% endblock %}

{% block list_filters_actions %}
    {%- if admin.datagrid.filters|length %}
        <ul class=\"nav navbar-nav navbar-right\">

            <li class=\"dropdown sonata-actions\">
                <a href=\"#\" class=\"dropdown-toggle sonata-ba-action\" data-toggle=\"dropdown\">
                    <i class=\"fa fa-filter\" aria-hidden=\"true\"></i>
                    {{ 'link_filters'|trans({}, 'SonataAdminBundle') }} <b class=\"caret\"></b>
                </a>

                <ul class=\"dropdown-menu\" role=\"menu\">
                    {% for filter in admin.datagrid.filters if (filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null) %}
                        {% set filterActive = ((filter.isActive() or filter.options['show_filter']) and not admin.isDefaultFilter(filter.formName)) %}
                        <li>
                            <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                <i class=\"fa {{ (filter.isActive() or filter.options['show_filter']) ? 'fa-check-square-o' : 'fa-square-o' }}\"></i>{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}
                            </a>
                        </li>
                    {% endfor %}
                </ul>
            </li>
        </ul>
    {% endif -%}
{% endblock %}

{% block list_filters %}
    {% if admin.datagrid.filters %}
        {% form_theme form admin.getTemplate('filter') %}

        <div class=\"col-xs-12 col-md-12 sonata-filters-box\" style=\"display: {{ admin.datagrid.hasDisplayableFilters ? 'block' : 'none' }}\" id=\"filter-container-{{ admin.uniqid() }}\">
            <div class=\"box box-primary\" >
                <div class=\"box-body\">
                    <form class=\"sonata-filter-form form-horizontal {{ admin.isChild and 1 == admin.datagrid.filters|length ? 'hide' : '' }}\" action=\"{{ admin.generateUrl('list') }}\" method=\"GET\" role=\"form\">
                        {{ form_errors(form) }}

                        <div class=\"row\">
                            <div class=\"col-sm-9\">
                                {% set withAdvancedFilter = false %}
                                {% for filter in admin.datagrid.filters %}
                                    {% set filterActive = ((filter.isActive() and filter.options['show_filter'] is null) or (filter.options['show_filter'] is same as(true))) and not admin.isDefaultFilter(filter.formName) %}
                                    {% set filterVisible = filter.options['show_filter'] is same as(true) or filter.options['show_filter'] is null %}
                                    <div class=\"form-group {% block sonata_list_filter_group_class %}{% endblock %}\" id=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" sonata-filter=\"{{ filterVisible ? 'true' : 'false' }}\" style=\"display: {% if filterActive %}block{% else %}none{% endif %}\">
                                        {% if filter.label is not same as(false) %}
                                            <label for=\"{{ form.children[filter.formName].children['value'].vars.id }}\" class=\"col-sm-3 control-label\">{{ filter.label|trans({}, filter.translationDomain ?: admin.translationDomain) }}</label>
                                        {% endif %}
                                        {% set attr = form.children[filter.formName].children['type'].vars.attr|default({}) %}

                                        <div class=\"col-sm-4 advanced-filter\">
                                            {{ form_widget(form.children[filter.formName].children['type'], {'attr':  attr}) }}
                                        </div>

                                        <div class=\"col-sm-4\">
                                            {{ form_widget(form.children[filter.formName].children['value']) }}
                                        </div>

                                        <div class=\"col-sm-1\">
                                            <label class=\"control-label\">
                                                <a href=\"#\" class=\"sonata-toggle-filter sonata-ba-action\" filter-target=\"filter-{{ admin.uniqid }}-{{ filter.name }}\" filter-container=\"filter-container-{{ admin.uniqid() }}\">
                                                    <i class=\"fa fa-minus-circle\" aria-hidden=\"true\"></i>
                                                </a>
                                            </label>
                                        </div>
                                    </div>

                                    {% if filter.options['advanced_filter'] %}
                                        {% set withAdvancedFilter = true %}
                                    {% endif %}
                                {% endfor %}
                            </div>
                            <div class=\"col-sm-3 text-center\">
                                <input type=\"hidden\" name=\"filter[_page]\" id=\"filter__page\" value=\"1\">

                                {% set foo = form.children['_page'].setRendered() %}
                                {{ form_rest(form) }}

                                <div class=\"form-group\">
                                    <button type=\"submit\" class=\"btn btn-primary\">
                                        <i class=\"fa fa-filter\" aria-hidden=\"true\"></i> {{ 'btn_filter'|trans({}, 'SonataAdminBundle') }}
                                    </button>

                                    <a class=\"btn btn-default\" href=\"{{ admin.generateUrl('list', {filters: 'reset'}) }}\">
                                        {{ 'link_reset_filter'|trans({}, 'SonataAdminBundle') }}
                                    </a>
                                </div>

                                {% if withAdvancedFilter %}
                                    <div class=\"form-group\">
                                        <a href=\"#\" data-toggle=\"advanced-filter\">
                                            <i class=\"fa fa-cogs\" aria-hidden=\"true\"></i>
                                            {{ 'btn_advanced_filters'|trans({}, 'SonataAdminBundle') }}
                                        </a>
                                    </div>
                                {% endif %}
                            </div>
                        </div>

                        {% for paramKey, paramValue in admin.persistentParameters %}
                            <input type=\"hidden\" name=\"{{ paramKey }}\" value=\"{{ paramValue }}\">
                        {% endfor %}
                    </form>
                </div>
            </div>
        </div>
    {% endif %}
{% endblock %}
", "SonataAdminBundle:CRUD:base_list.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/base_list.html.twig");
    }
}
