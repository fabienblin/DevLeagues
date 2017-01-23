<?php

/* SonataAdminBundle:CRUD:base_list.html.twig */
class __TwigTemplate_16ebaf0fa30681157978b78bdc1f937ddca73c07fe7edc1311d4f8b054a9e35b extends Twig_Template
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
        $__internal_a59350353345be78c930ffe27a3b2521bac2e3c4ad6374d2b8f992bb5afc02ce = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a59350353345be78c930ffe27a3b2521bac2e3c4ad6374d2b8f992bb5afc02ce->enter($__internal_a59350353345be78c930ffe27a3b2521bac2e3c4ad6374d2b8f992bb5afc02ce_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $__internal_b99ea4ee93722d77628f886d44c4a92fb0cf62b800abba05268a32ab95c4f9ac = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b99ea4ee93722d77628f886d44c4a92fb0cf62b800abba05268a32ab95c4f9ac->enter($__internal_b99ea4ee93722d77628f886d44c4a92fb0cf62b800abba05268a32ab95c4f9ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "SonataAdminBundle:CRUD:base_list.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a59350353345be78c930ffe27a3b2521bac2e3c4ad6374d2b8f992bb5afc02ce->leave($__internal_a59350353345be78c930ffe27a3b2521bac2e3c4ad6374d2b8f992bb5afc02ce_prof);

        
        $__internal_b99ea4ee93722d77628f886d44c4a92fb0cf62b800abba05268a32ab95c4f9ac->leave($__internal_b99ea4ee93722d77628f886d44c4a92fb0cf62b800abba05268a32ab95c4f9ac_prof);

    }

    // line 14
    public function block_actions($context, array $blocks = array())
    {
        $__internal_a71a1896828e5193e91e9ac0acf79dcae4c964c9383a600308aeef6bd0c52ec1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a71a1896828e5193e91e9ac0acf79dcae4c964c9383a600308aeef6bd0c52ec1->enter($__internal_a71a1896828e5193e91e9ac0acf79dcae4c964c9383a600308aeef6bd0c52ec1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        $__internal_b74f38a9df4e40e0aaeb8a3d5780c3579297d61382f1b890db2a57f34b40afb5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b74f38a9df4e40e0aaeb8a3d5780c3579297d61382f1b890db2a57f34b40afb5->enter($__internal_b74f38a9df4e40e0aaeb8a3d5780c3579297d61382f1b890db2a57f34b40afb5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "actions"));

        // line 15
        $this->loadTemplate("SonataAdminBundle:CRUD:action_buttons.html.twig", "SonataAdminBundle:CRUD:base_list.html.twig", 15)->display($context);
        
        $__internal_b74f38a9df4e40e0aaeb8a3d5780c3579297d61382f1b890db2a57f34b40afb5->leave($__internal_b74f38a9df4e40e0aaeb8a3d5780c3579297d61382f1b890db2a57f34b40afb5_prof);

        
        $__internal_a71a1896828e5193e91e9ac0acf79dcae4c964c9383a600308aeef6bd0c52ec1->leave($__internal_a71a1896828e5193e91e9ac0acf79dcae4c964c9383a600308aeef6bd0c52ec1_prof);

    }

    // line 18
    public function block_tab_menu($context, array $blocks = array())
    {
        $__internal_dd34f50ad7735128ca1dff0d8124b1c2f6ff494b03564d06f816799c9f1ea92b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_dd34f50ad7735128ca1dff0d8124b1c2f6ff494b03564d06f816799c9f1ea92b->enter($__internal_dd34f50ad7735128ca1dff0d8124b1c2f6ff494b03564d06f816799c9f1ea92b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        $__internal_a64b94bd48d1831826b91a8b7f1b50bac1c1c98bedbafbdbe75bc8241052f517 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a64b94bd48d1831826b91a8b7f1b50bac1c1c98bedbafbdbe75bc8241052f517->enter($__internal_a64b94bd48d1831826b91a8b7f1b50bac1c1c98bedbafbdbe75bc8241052f517_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "tab_menu"));

        echo $this->env->getExtension('Knp\Menu\Twig\MenuExtension')->render($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "sidemenu", array(0 => ($context["action"] ?? $this->getContext($context, "action"))), "method"), array("currentClass" => "active", "template" => $this->getAttribute($this->getAttribute(($context["sonata_admin"] ?? $this->getContext($context, "sonata_admin")), "adminPool", array()), "getTemplate", array(0 => "tab_menu_template"), "method")), "twig");
        
        $__internal_a64b94bd48d1831826b91a8b7f1b50bac1c1c98bedbafbdbe75bc8241052f517->leave($__internal_a64b94bd48d1831826b91a8b7f1b50bac1c1c98bedbafbdbe75bc8241052f517_prof);

        
        $__internal_dd34f50ad7735128ca1dff0d8124b1c2f6ff494b03564d06f816799c9f1ea92b->leave($__internal_dd34f50ad7735128ca1dff0d8124b1c2f6ff494b03564d06f816799c9f1ea92b_prof);

    }

    // line 20
    public function block_list_table($context, array $blocks = array())
    {
        $__internal_b63447e43e64b80ecea7b46b54611ea6af329670a731887f193d1d7f2f5ef4bd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b63447e43e64b80ecea7b46b54611ea6af329670a731887f193d1d7f2f5ef4bd->enter($__internal_b63447e43e64b80ecea7b46b54611ea6af329670a731887f193d1d7f2f5ef4bd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

        $__internal_a098c06818e9ede3785bb7bdd5136d7053f2af841b318f6dc9fb14c86f73b84a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a098c06818e9ede3785bb7bdd5136d7053f2af841b318f6dc9fb14c86f73b84a->enter($__internal_a098c06818e9ede3785bb7bdd5136d7053f2af841b318f6dc9fb14c86f73b84a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_table"));

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
        
        $__internal_a098c06818e9ede3785bb7bdd5136d7053f2af841b318f6dc9fb14c86f73b84a->leave($__internal_a098c06818e9ede3785bb7bdd5136d7053f2af841b318f6dc9fb14c86f73b84a_prof);

        
        $__internal_b63447e43e64b80ecea7b46b54611ea6af329670a731887f193d1d7f2f5ef4bd->leave($__internal_b63447e43e64b80ecea7b46b54611ea6af329670a731887f193d1d7f2f5ef4bd_prof);

    }

    // line 33
    public function block_list_header($context, array $blocks = array())
    {
        $__internal_72940ed533e8ef9f95a86600b6d4e832292d6b45d86f61bb59f63358273ff7e7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_72940ed533e8ef9f95a86600b6d4e832292d6b45d86f61bb59f63358273ff7e7->enter($__internal_72940ed533e8ef9f95a86600b6d4e832292d6b45d86f61bb59f63358273ff7e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        $__internal_edb2db2be8d3fa0585401ad0996b55dbb7299f4524675700c6fe51d687d46c7a = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_edb2db2be8d3fa0585401ad0996b55dbb7299f4524675700c6fe51d687d46c7a->enter($__internal_edb2db2be8d3fa0585401ad0996b55dbb7299f4524675700c6fe51d687d46c7a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_header"));

        
        $__internal_edb2db2be8d3fa0585401ad0996b55dbb7299f4524675700c6fe51d687d46c7a->leave($__internal_edb2db2be8d3fa0585401ad0996b55dbb7299f4524675700c6fe51d687d46c7a_prof);

        
        $__internal_72940ed533e8ef9f95a86600b6d4e832292d6b45d86f61bb59f63358273ff7e7->leave($__internal_72940ed533e8ef9f95a86600b6d4e832292d6b45d86f61bb59f63358273ff7e7_prof);

    }

    // line 37
    public function block_table_header($context, array $blocks = array())
    {
        $__internal_4078be903a2d90a3ac9076b2bb9d9508c6e6526f90c0193ef13cd30e64e18f5e = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4078be903a2d90a3ac9076b2bb9d9508c6e6526f90c0193ef13cd30e64e18f5e->enter($__internal_4078be903a2d90a3ac9076b2bb9d9508c6e6526f90c0193ef13cd30e64e18f5e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

        $__internal_a44f00d155575107d578e4312963b394a42fe3cbf63e36b1b06d474f52894cea = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_a44f00d155575107d578e4312963b394a42fe3cbf63e36b1b06d474f52894cea->enter($__internal_a44f00d155575107d578e4312963b394a42fe3cbf63e36b1b06d474f52894cea_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_header"));

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
        
        $__internal_a44f00d155575107d578e4312963b394a42fe3cbf63e36b1b06d474f52894cea->leave($__internal_a44f00d155575107d578e4312963b394a42fe3cbf63e36b1b06d474f52894cea_prof);

        
        $__internal_4078be903a2d90a3ac9076b2bb9d9508c6e6526f90c0193ef13cd30e64e18f5e->leave($__internal_4078be903a2d90a3ac9076b2bb9d9508c6e6526f90c0193ef13cd30e64e18f5e_prof);

    }

    // line 74
    public function block_table_body($context, array $blocks = array())
    {
        $__internal_b61e97f8d3878dc2fe49daf1dccd92b00f519a96a1d97df5ae995072c8c4c0d5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b61e97f8d3878dc2fe49daf1dccd92b00f519a96a1d97df5ae995072c8c4c0d5->enter($__internal_b61e97f8d3878dc2fe49daf1dccd92b00f519a96a1d97df5ae995072c8c4c0d5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        $__internal_3260713818e20fd384cabc038248fcc05bd7959dad4455bdbf3987fff54ca990 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3260713818e20fd384cabc038248fcc05bd7959dad4455bdbf3987fff54ca990->enter($__internal_3260713818e20fd384cabc038248fcc05bd7959dad4455bdbf3987fff54ca990_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_body"));

        // line 75
        echo "                            <tbody>
                                ";
        // line 76
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => ("outer_list_rows_" . $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method"))), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 76)->display($context);
        // line 77
        echo "                            </tbody>
                        ";
        
        $__internal_3260713818e20fd384cabc038248fcc05bd7959dad4455bdbf3987fff54ca990->leave($__internal_3260713818e20fd384cabc038248fcc05bd7959dad4455bdbf3987fff54ca990_prof);

        
        $__internal_b61e97f8d3878dc2fe49daf1dccd92b00f519a96a1d97df5ae995072c8c4c0d5->leave($__internal_b61e97f8d3878dc2fe49daf1dccd92b00f519a96a1d97df5ae995072c8c4c0d5_prof);

    }

    // line 80
    public function block_table_footer($context, array $blocks = array())
    {
        $__internal_0336c505b11b5f7201393788e2818c9e016895cbe8f8090f99fe5e44831e4c72 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0336c505b11b5f7201393788e2818c9e016895cbe8f8090f99fe5e44831e4c72->enter($__internal_0336c505b11b5f7201393788e2818c9e016895cbe8f8090f99fe5e44831e4c72_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        $__internal_cf5fba77828288ebca95cbdffe887ccc13fc6ccb962c95bb306e54e0a28b2f38 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_cf5fba77828288ebca95cbdffe887ccc13fc6ccb962c95bb306e54e0a28b2f38->enter($__internal_cf5fba77828288ebca95cbdffe887ccc13fc6ccb962c95bb306e54e0a28b2f38_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "table_footer"));

        // line 81
        echo "                        ";
        
        $__internal_cf5fba77828288ebca95cbdffe887ccc13fc6ccb962c95bb306e54e0a28b2f38->leave($__internal_cf5fba77828288ebca95cbdffe887ccc13fc6ccb962c95bb306e54e0a28b2f38_prof);

        
        $__internal_0336c505b11b5f7201393788e2818c9e016895cbe8f8090f99fe5e44831e4c72->leave($__internal_0336c505b11b5f7201393788e2818c9e016895cbe8f8090f99fe5e44831e4c72_prof);

    }

    // line 84
    public function block_no_result_content($context, array $blocks = array())
    {
        $__internal_b7d7d41e173de5d91195f084c3433410a3ff5142bc63975b7c7b0f627f18c941 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_b7d7d41e173de5d91195f084c3433410a3ff5142bc63975b7c7b0f627f18c941->enter($__internal_b7d7d41e173de5d91195f084c3433410a3ff5142bc63975b7c7b0f627f18c941_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

        $__internal_dd352a02bac9d9778d62d4498e6e8bca4f7684dad22dd779f4611ae9f67b8e9b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_dd352a02bac9d9778d62d4498e6e8bca4f7684dad22dd779f4611ae9f67b8e9b->enter($__internal_dd352a02bac9d9778d62d4498e6e8bca4f7684dad22dd779f4611ae9f67b8e9b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "no_result_content"));

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
        
        $__internal_dd352a02bac9d9778d62d4498e6e8bca4f7684dad22dd779f4611ae9f67b8e9b->leave($__internal_dd352a02bac9d9778d62d4498e6e8bca4f7684dad22dd779f4611ae9f67b8e9b_prof);

        
        $__internal_b7d7d41e173de5d91195f084c3433410a3ff5142bc63975b7c7b0f627f18c941->leave($__internal_b7d7d41e173de5d91195f084c3433410a3ff5142bc63975b7c7b0f627f18c941_prof);

    }

    // line 104
    public function block_list_footer($context, array $blocks = array())
    {
        $__internal_4eb13c48d40a1677932bfaaf48874bc12da65ecec8588fccdc7cf34072c0332d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4eb13c48d40a1677932bfaaf48874bc12da65ecec8588fccdc7cf34072c0332d->enter($__internal_4eb13c48d40a1677932bfaaf48874bc12da65ecec8588fccdc7cf34072c0332d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

        $__internal_0dda764538d801f2a1a43eddf9eed613c3732f37f7677f9dd07e9520aeaaa152 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0dda764538d801f2a1a43eddf9eed613c3732f37f7677f9dd07e9520aeaaa152->enter($__internal_0dda764538d801f2a1a43eddf9eed613c3732f37f7677f9dd07e9520aeaaa152_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_footer"));

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
        
        $__internal_0dda764538d801f2a1a43eddf9eed613c3732f37f7677f9dd07e9520aeaaa152->leave($__internal_0dda764538d801f2a1a43eddf9eed613c3732f37f7677f9dd07e9520aeaaa152_prof);

        
        $__internal_4eb13c48d40a1677932bfaaf48874bc12da65ecec8588fccdc7cf34072c0332d->leave($__internal_4eb13c48d40a1677932bfaaf48874bc12da65ecec8588fccdc7cf34072c0332d_prof);

    }

    // line 111
    public function block_batch($context, array $blocks = array())
    {
        $__internal_117d97a08210a82e633101b70c7ca24337697d3ecb8797a8d6143dae3f165074 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_117d97a08210a82e633101b70c7ca24337697d3ecb8797a8d6143dae3f165074->enter($__internal_117d97a08210a82e633101b70c7ca24337697d3ecb8797a8d6143dae3f165074_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

        $__internal_721f4757a7de737b84bdec1ceaf7e9f0f2dd164ccff29a65d866377818b297cc = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_721f4757a7de737b84bdec1ceaf7e9f0f2dd164ccff29a65d866377818b297cc->enter($__internal_721f4757a7de737b84bdec1ceaf7e9f0f2dd164ccff29a65d866377818b297cc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch"));

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
        
        $__internal_721f4757a7de737b84bdec1ceaf7e9f0f2dd164ccff29a65d866377818b297cc->leave($__internal_721f4757a7de737b84bdec1ceaf7e9f0f2dd164ccff29a65d866377818b297cc_prof);

        
        $__internal_117d97a08210a82e633101b70c7ca24337697d3ecb8797a8d6143dae3f165074->leave($__internal_117d97a08210a82e633101b70c7ca24337697d3ecb8797a8d6143dae3f165074_prof);

    }

    // line 113
    public function block_batch_javascript($context, array $blocks = array())
    {
        $__internal_8390bfe3d7164a767ef24c88e70bb8dafd620cdb581792c1d2a6264eb0e2fd9a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8390bfe3d7164a767ef24c88e70bb8dafd620cdb581792c1d2a6264eb0e2fd9a->enter($__internal_8390bfe3d7164a767ef24c88e70bb8dafd620cdb581792c1d2a6264eb0e2fd9a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

        $__internal_4e26ef1a000ef4eb6e64ceea6a387b3f1dab733fdce2e8dcabb3734811ddae23 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4e26ef1a000ef4eb6e64ceea6a387b3f1dab733fdce2e8dcabb3734811ddae23->enter($__internal_4e26ef1a000ef4eb6e64ceea6a387b3f1dab733fdce2e8dcabb3734811ddae23_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_javascript"));

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
        
        $__internal_4e26ef1a000ef4eb6e64ceea6a387b3f1dab733fdce2e8dcabb3734811ddae23->leave($__internal_4e26ef1a000ef4eb6e64ceea6a387b3f1dab733fdce2e8dcabb3734811ddae23_prof);

        
        $__internal_8390bfe3d7164a767ef24c88e70bb8dafd620cdb581792c1d2a6264eb0e2fd9a->leave($__internal_8390bfe3d7164a767ef24c88e70bb8dafd620cdb581792c1d2a6264eb0e2fd9a_prof);

    }

    // line 142
    public function block_batch_actions($context, array $blocks = array())
    {
        $__internal_8b9a701daf1e015dcdd733c87a507c55e67a9ccf851858c705c851c2769a6a56 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8b9a701daf1e015dcdd733c87a507c55e67a9ccf851858c705c851c2769a6a56->enter($__internal_8b9a701daf1e015dcdd733c87a507c55e67a9ccf851858c705c851c2769a6a56_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

        $__internal_f4b66450076a8791a8e1b0d8539802f15e86be63b8bf4d31e08c159eca26e6b2 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f4b66450076a8791a8e1b0d8539802f15e86be63b8bf4d31e08c159eca26e6b2->enter($__internal_f4b66450076a8791a8e1b0d8539802f15e86be63b8bf4d31e08c159eca26e6b2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "batch_actions"));

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
        
        $__internal_f4b66450076a8791a8e1b0d8539802f15e86be63b8bf4d31e08c159eca26e6b2->leave($__internal_f4b66450076a8791a8e1b0d8539802f15e86be63b8bf4d31e08c159eca26e6b2_prof);

        
        $__internal_8b9a701daf1e015dcdd733c87a507c55e67a9ccf851858c705c851c2769a6a56->leave($__internal_8b9a701daf1e015dcdd733c87a507c55e67a9ccf851858c705c851c2769a6a56_prof);

    }

    // line 185
    public function block_pager_results($context, array $blocks = array())
    {
        $__internal_a766d724db37bc6952d85a24552a599cc7a75df7898ae94f7719501d7366a796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_a766d724db37bc6952d85a24552a599cc7a75df7898ae94f7719501d7366a796->enter($__internal_a766d724db37bc6952d85a24552a599cc7a75df7898ae94f7719501d7366a796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        $__internal_01649dc755702d9e3628bcdcafae88b5b7ea36da4f5f6997a2b5c4cbcc8ee899 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_01649dc755702d9e3628bcdcafae88b5b7ea36da4f5f6997a2b5c4cbcc8ee899->enter($__internal_01649dc755702d9e3628bcdcafae88b5b7ea36da4f5f6997a2b5c4cbcc8ee899_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_results"));

        // line 186
        echo "                                        ";
        $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "pager_results"), "method"), "SonataAdminBundle:CRUD:base_list.html.twig", 186)->display($context);
        // line 187
        echo "                                    ";
        
        $__internal_01649dc755702d9e3628bcdcafae88b5b7ea36da4f5f6997a2b5c4cbcc8ee899->leave($__internal_01649dc755702d9e3628bcdcafae88b5b7ea36da4f5f6997a2b5c4cbcc8ee899_prof);

        
        $__internal_a766d724db37bc6952d85a24552a599cc7a75df7898ae94f7719501d7366a796->leave($__internal_a766d724db37bc6952d85a24552a599cc7a75df7898ae94f7719501d7366a796_prof);

    }

    // line 192
    public function block_pager_links($context, array $blocks = array())
    {
        $__internal_2dac6bf231c713b70a8f420054daaf646c015721de6aa7ede7232a01b30d86bb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2dac6bf231c713b70a8f420054daaf646c015721de6aa7ede7232a01b30d86bb->enter($__internal_2dac6bf231c713b70a8f420054daaf646c015721de6aa7ede7232a01b30d86bb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

        $__internal_043607024808724cd4c1e79456424f071a72a48f983505ca4572d707cb02bcfb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_043607024808724cd4c1e79456424f071a72a48f983505ca4572d707cb02bcfb->enter($__internal_043607024808724cd4c1e79456424f071a72a48f983505ca4572d707cb02bcfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "pager_links"));

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
        
        $__internal_043607024808724cd4c1e79456424f071a72a48f983505ca4572d707cb02bcfb->leave($__internal_043607024808724cd4c1e79456424f071a72a48f983505ca4572d707cb02bcfb_prof);

        
        $__internal_2dac6bf231c713b70a8f420054daaf646c015721de6aa7ede7232a01b30d86bb->leave($__internal_2dac6bf231c713b70a8f420054daaf646c015721de6aa7ede7232a01b30d86bb_prof);

    }

    // line 208
    public function block_list_filters_actions($context, array $blocks = array())
    {
        $__internal_84844f06b54ab7f543968d7a57428f3e3d454979b084230e1e413091363e4aa9 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_84844f06b54ab7f543968d7a57428f3e3d454979b084230e1e413091363e4aa9->enter($__internal_84844f06b54ab7f543968d7a57428f3e3d454979b084230e1e413091363e4aa9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

        $__internal_8dc625cf922e90ca14c35f6878535c6998b39bfc176f2ff1dd4aed0b2ad782fa = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8dc625cf922e90ca14c35f6878535c6998b39bfc176f2ff1dd4aed0b2ad782fa->enter($__internal_8dc625cf922e90ca14c35f6878535c6998b39bfc176f2ff1dd4aed0b2ad782fa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters_actions"));

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
        
        $__internal_8dc625cf922e90ca14c35f6878535c6998b39bfc176f2ff1dd4aed0b2ad782fa->leave($__internal_8dc625cf922e90ca14c35f6878535c6998b39bfc176f2ff1dd4aed0b2ad782fa_prof);

        
        $__internal_84844f06b54ab7f543968d7a57428f3e3d454979b084230e1e413091363e4aa9->leave($__internal_84844f06b54ab7f543968d7a57428f3e3d454979b084230e1e413091363e4aa9_prof);

    }

    // line 233
    public function block_list_filters($context, array $blocks = array())
    {
        $__internal_51255e3a8fb58853b83d84a6f823f9a16d9cb984ed8cab34def0983ab0140970 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_51255e3a8fb58853b83d84a6f823f9a16d9cb984ed8cab34def0983ab0140970->enter($__internal_51255e3a8fb58853b83d84a6f823f9a16d9cb984ed8cab34def0983ab0140970_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

        $__internal_228a3ad2053f5acefb1e932881a1e628777eaadad39ddc2360c009fa59e7e5e5 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_228a3ad2053f5acefb1e932881a1e628777eaadad39ddc2360c009fa59e7e5e5->enter($__internal_228a3ad2053f5acefb1e932881a1e628777eaadad39ddc2360c009fa59e7e5e5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list_filters"));

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
        
        $__internal_228a3ad2053f5acefb1e932881a1e628777eaadad39ddc2360c009fa59e7e5e5->leave($__internal_228a3ad2053f5acefb1e932881a1e628777eaadad39ddc2360c009fa59e7e5e5_prof);

        
        $__internal_51255e3a8fb58853b83d84a6f823f9a16d9cb984ed8cab34def0983ab0140970->leave($__internal_51255e3a8fb58853b83d84a6f823f9a16d9cb984ed8cab34def0983ab0140970_prof);

    }

    // line 249
    public function block_sonata_list_filter_group_class($context, array $blocks = array())
    {
        $__internal_606f203f19e15ca1c0da7fa82c8406b101a53a08a5b5d29989cb91c79a812db5 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_606f203f19e15ca1c0da7fa82c8406b101a53a08a5b5d29989cb91c79a812db5->enter($__internal_606f203f19e15ca1c0da7fa82c8406b101a53a08a5b5d29989cb91c79a812db5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        $__internal_3e4d14ebf4dd757c4bdeb961b5d27ed724da18a384736cacaa4586b4e25152f8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_3e4d14ebf4dd757c4bdeb961b5d27ed724da18a384736cacaa4586b4e25152f8->enter($__internal_3e4d14ebf4dd757c4bdeb961b5d27ed724da18a384736cacaa4586b4e25152f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "sonata_list_filter_group_class"));

        
        $__internal_3e4d14ebf4dd757c4bdeb961b5d27ed724da18a384736cacaa4586b4e25152f8->leave($__internal_3e4d14ebf4dd757c4bdeb961b5d27ed724da18a384736cacaa4586b4e25152f8_prof);

        
        $__internal_606f203f19e15ca1c0da7fa82c8406b101a53a08a5b5d29989cb91c79a812db5->leave($__internal_606f203f19e15ca1c0da7fa82c8406b101a53a08a5b5d29989cb91c79a812db5_prof);

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
