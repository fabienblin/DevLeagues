<?php

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_ca74d1f784ad390c801760b0eba955330148ed85b7cdc20e74d62b5a8ba7f388 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'content' => array($this, 'block_content'),
            'preview' => array($this, 'block_preview'),
            'form' => array($this, 'block_form'),
            'list' => array($this, 'block_list'),
            'show' => array($this, 'block_show'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_634db654a195548cc0d0a279b5d382a7d51a04c1b3a7841e58cb3d7f20cb997b = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_634db654a195548cc0d0a279b5d382a7d51a04c1b3a7841e58cb3d7f20cb997b->enter($__internal_634db654a195548cc0d0a279b5d382a7d51a04c1b3a7841e58cb3d7f20cb997b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        $__internal_26413834ee913de636b154263d7fea9ef5b616b504da95209ea1b9b983a53196 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_26413834ee913de636b154263d7fea9ef5b616b504da95209ea1b9b983a53196->enter($__internal_26413834ee913de636b154263d7fea9ef5b616b504da95209ea1b9b983a53196_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_634db654a195548cc0d0a279b5d382a7d51a04c1b3a7841e58cb3d7f20cb997b->leave($__internal_634db654a195548cc0d0a279b5d382a7d51a04c1b3a7841e58cb3d7f20cb997b_prof);

        
        $__internal_26413834ee913de636b154263d7fea9ef5b616b504da95209ea1b9b983a53196->leave($__internal_26413834ee913de636b154263d7fea9ef5b616b504da95209ea1b9b983a53196_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_c1909773ba512bcb244cabbe9a9c2ab2c8f4ba76b20fcada87ebb4a7a991ced2 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c1909773ba512bcb244cabbe9a9c2ab2c8f4ba76b20fcada87ebb4a7a991ced2->enter($__internal_c1909773ba512bcb244cabbe9a9c2ab2c8f4ba76b20fcada87ebb4a7a991ced2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_728821d496623257f514776b80c7239b9977a69ff6361299612a44befb85c052 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_728821d496623257f514776b80c7239b9977a69ff6361299612a44befb85c052->enter($__internal_728821d496623257f514776b80c7239b9977a69ff6361299612a44befb85c052_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 13
        echo "    ";
        $context["_list_table"] = trim(        $this->renderBlock("list_table", $context, $blocks));
        // line 14
        echo "    ";
        $context["_list_filters"] = trim(        $this->renderBlock("list_filters", $context, $blocks));
        // line 15
        echo "    ";
        $context["_list_filters_actions"] =         $this->renderBlock("list_filters_actions", $context, $blocks);
        // line 16
        echo "
    ";
        // line 17
        $this->displayBlock('preview', $context, $blocks);
        // line 18
        echo "    ";
        $this->displayBlock('form', $context, $blocks);
        // line 19
        echo "    ";
        $this->displayBlock('list', $context, $blocks);
        // line 20
        echo "    ";
        $this->displayBlock('show', $context, $blocks);
        // line 21
        echo "


    ";
        // line 24
        if (( !twig_test_empty((isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"))) ||  !twig_test_empty((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"))))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && ((isset($context["action"]) ? $context["action"] : $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
                        echo " active";
                    }
                    echo "\"><i class=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["settings"], "class", array()), "html", null, true);
                    echo "\"></i></a>
                                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['mode'], $context['settings'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 36
                echo "                            </div>
                        ";
            }
            // line 38
            echo "
                        ";
            // line 39
            if ( !twig_test_empty((isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions")))) {
                // line 40
                echo "                            ";
                echo (isset($context["_list_filters_actions"]) ? $context["_list_filters_actions"] : $this->getContext($context, "_list_filters_actions"));
                echo "
                        ";
            }
            // line 42
            echo "
                    </div>
                </div>
            </div>
        </div>

        ";
            // line 48
            if (trim((isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters")))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo (isset($context["_list_filters"]) ? $context["_list_filters"] : $this->getContext($context, "_list_filters"));
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo (isset($context["_list_table"]) ? $context["_list_table"] : $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_728821d496623257f514776b80c7239b9977a69ff6361299612a44befb85c052->leave($__internal_728821d496623257f514776b80c7239b9977a69ff6361299612a44befb85c052_prof);

        
        $__internal_c1909773ba512bcb244cabbe9a9c2ab2c8f4ba76b20fcada87ebb4a7a991ced2->leave($__internal_c1909773ba512bcb244cabbe9a9c2ab2c8f4ba76b20fcada87ebb4a7a991ced2_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_04f486f697d3a78a08df4d532667fe8ec577a02910134e505b410d86ec781a0c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_04f486f697d3a78a08df4d532667fe8ec577a02910134e505b410d86ec781a0c->enter($__internal_04f486f697d3a78a08df4d532667fe8ec577a02910134e505b410d86ec781a0c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_c52d23f33f1c476b78665a5d4a6f8654367d11472cecfc594e314341ead19ab9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c52d23f33f1c476b78665a5d4a6f8654367d11472cecfc594e314341ead19ab9->enter($__internal_c52d23f33f1c476b78665a5d4a6f8654367d11472cecfc594e314341ead19ab9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_c52d23f33f1c476b78665a5d4a6f8654367d11472cecfc594e314341ead19ab9->leave($__internal_c52d23f33f1c476b78665a5d4a6f8654367d11472cecfc594e314341ead19ab9_prof);

        
        $__internal_04f486f697d3a78a08df4d532667fe8ec577a02910134e505b410d86ec781a0c->leave($__internal_04f486f697d3a78a08df4d532667fe8ec577a02910134e505b410d86ec781a0c_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_ebd678eb5d2177ddf1c3574221a0816870a3d0f88f8448fbe21aca4e0ddd0772 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ebd678eb5d2177ddf1c3574221a0816870a3d0f88f8448fbe21aca4e0ddd0772->enter($__internal_ebd678eb5d2177ddf1c3574221a0816870a3d0f88f8448fbe21aca4e0ddd0772_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_f1b31b58fa6410367d17176c713722b2417157beaee8cbf27b560dec9f6cf55b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f1b31b58fa6410367d17176c713722b2417157beaee8cbf27b560dec9f6cf55b->enter($__internal_f1b31b58fa6410367d17176c713722b2417157beaee8cbf27b560dec9f6cf55b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_f1b31b58fa6410367d17176c713722b2417157beaee8cbf27b560dec9f6cf55b->leave($__internal_f1b31b58fa6410367d17176c713722b2417157beaee8cbf27b560dec9f6cf55b_prof);

        
        $__internal_ebd678eb5d2177ddf1c3574221a0816870a3d0f88f8448fbe21aca4e0ddd0772->leave($__internal_ebd678eb5d2177ddf1c3574221a0816870a3d0f88f8448fbe21aca4e0ddd0772_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_00b836b3663249655da89b123e91de0f1521ea6f13f26df01d2604d6d152b15d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_00b836b3663249655da89b123e91de0f1521ea6f13f26df01d2604d6d152b15d->enter($__internal_00b836b3663249655da89b123e91de0f1521ea6f13f26df01d2604d6d152b15d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_5e7ae022c2494bf29acd10b534f8fbbc3c2e966644b1ee3efcb3391c43576548 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5e7ae022c2494bf29acd10b534f8fbbc3c2e966644b1ee3efcb3391c43576548->enter($__internal_5e7ae022c2494bf29acd10b534f8fbbc3c2e966644b1ee3efcb3391c43576548_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_5e7ae022c2494bf29acd10b534f8fbbc3c2e966644b1ee3efcb3391c43576548->leave($__internal_5e7ae022c2494bf29acd10b534f8fbbc3c2e966644b1ee3efcb3391c43576548_prof);

        
        $__internal_00b836b3663249655da89b123e91de0f1521ea6f13f26df01d2604d6d152b15d->leave($__internal_00b836b3663249655da89b123e91de0f1521ea6f13f26df01d2604d6d152b15d_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_31d19a61088809532c7c11973b4cd6d53644179929fa1f330a5c8a1ff8c040d7 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_31d19a61088809532c7c11973b4cd6d53644179929fa1f330a5c8a1ff8c040d7->enter($__internal_31d19a61088809532c7c11973b4cd6d53644179929fa1f330a5c8a1ff8c040d7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_6e28ed5739ee030dea1d2f0dc2e91abf38550dbeb0e67d7454bc1ca14078dd28 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6e28ed5739ee030dea1d2f0dc2e91abf38550dbeb0e67d7454bc1ca14078dd28->enter($__internal_6e28ed5739ee030dea1d2f0dc2e91abf38550dbeb0e67d7454bc1ca14078dd28_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_6e28ed5739ee030dea1d2f0dc2e91abf38550dbeb0e67d7454bc1ca14078dd28->leave($__internal_6e28ed5739ee030dea1d2f0dc2e91abf38550dbeb0e67d7454bc1ca14078dd28_prof);

        
        $__internal_31d19a61088809532c7c11973b4cd6d53644179929fa1f330a5c8a1ff8c040d7->leave($__internal_31d19a61088809532c7c11973b4cd6d53644179929fa1f330a5c8a1ff8c040d7_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/ajax_layout.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  220 => 20,  203 => 19,  186 => 18,  169 => 17,  158 => 59,  151 => 55,  147 => 53,  141 => 50,  138 => 49,  136 => 48,  128 => 42,  122 => 40,  120 => 39,  117 => 38,  113 => 36,  98 => 34,  94 => 33,  91 => 32,  89 => 31,  81 => 25,  79 => 24,  74 => 21,  71 => 20,  68 => 19,  65 => 18,  63 => 17,  60 => 16,  57 => 15,  54 => 14,  51 => 13,  33 => 12,  30 => 11,);
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

{% block content %}
    {% set _list_table           = block('list_table')|trim %}
    {% set _list_filters         = block('list_filters')|trim %}
    {% set _list_filters_actions = block('list_filters_actions') %}

    {% block preview %}{% endblock %}
    {% block form %}{% endblock %}
    {% block list %}{% endblock %}
    {% block show %}{% endblock %}



    {% if _list_table is not empty or _list_filters is not empty %}
    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        {% if admin is defined and action is defined and action == 'list' and admin.listModes|length > 1 %}
                            <div class=\"nav navbar-right btn-group\">
                                {% for mode, settings in admin.listModes %}
                                    <a href=\"{{ admin.generateUrl('list', app.request.query.all|merge({_list_mode: mode})) }}\" class=\"btn btn-default navbar-btn btn-sm{% if admin.getListMode() == mode %} active{% endif %}\"><i class=\"{{ settings.class }}\"></i></a>
                                {% endfor %}
                            </div>
                        {% endif %}

                        {% if _list_filters_actions is not empty %}
                            {{ _list_filters_actions|raw }}
                        {% endif %}

                    </div>
                </div>
            </div>
        </div>

        {% if _list_filters|trim %}
             <div class=\"row\">
                 {{ _list_filters|raw }}
             </div>
        {% endif %}

        <div class=\"row\">
            {{ _list_table|raw }}
        </div>
    </div>
     {% endif %}

{% endblock %}
", "@SonataAdmin/ajax_layout.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
