<?php

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_9108fa9e4914ecd2092d4524f4c0e990fc2706bac1cfe900cdd48c2080c061ad extends Twig_Template
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
        $__internal_58a0cdf479a36569d144145156fe7ae11ed165f936791589a5b3807af6a17f47 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_58a0cdf479a36569d144145156fe7ae11ed165f936791589a5b3807af6a17f47->enter($__internal_58a0cdf479a36569d144145156fe7ae11ed165f936791589a5b3807af6a17f47_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        $__internal_338d8d6d52c59a79e6213afff576b45f2a33e2a901d75c2b89138e1b8b5bb188 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_338d8d6d52c59a79e6213afff576b45f2a33e2a901d75c2b89138e1b8b5bb188->enter($__internal_338d8d6d52c59a79e6213afff576b45f2a33e2a901d75c2b89138e1b8b5bb188_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_58a0cdf479a36569d144145156fe7ae11ed165f936791589a5b3807af6a17f47->leave($__internal_58a0cdf479a36569d144145156fe7ae11ed165f936791589a5b3807af6a17f47_prof);

        
        $__internal_338d8d6d52c59a79e6213afff576b45f2a33e2a901d75c2b89138e1b8b5bb188->leave($__internal_338d8d6d52c59a79e6213afff576b45f2a33e2a901d75c2b89138e1b8b5bb188_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_bdcc87512e28d6dec97735edafbd9d0be8e68729e3149b1fb662d9622fa82cc6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_bdcc87512e28d6dec97735edafbd9d0be8e68729e3149b1fb662d9622fa82cc6->enter($__internal_bdcc87512e28d6dec97735edafbd9d0be8e68729e3149b1fb662d9622fa82cc6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_804ee0df63eadff015d7cd2c434d53a35578a06a19345836b7c280b3c581753e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_804ee0df63eadff015d7cd2c434d53a35578a06a19345836b7c280b3c581753e->enter($__internal_804ee0df63eadff015d7cd2c434d53a35578a06a19345836b7c280b3c581753e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        if (( !twig_test_empty(($context["_list_table"] ?? $this->getContext($context, "_list_table"))) ||  !twig_test_empty(($context["_list_filters"] ?? $this->getContext($context, "_list_filters"))))) {
            // line 25
            echo "    <div class=\"container-fluid\">
        <div class=\"row\">

            <div class=\"navbar navbar-default sonata-list-table\">
                <div class=\"container-fluid\">
                    <div class=\"navbar-collapse\">
                        ";
            // line 31
            if ((((array_key_exists("admin", $context) && array_key_exists("action", $context)) && (($context["action"] ?? $this->getContext($context, "action")) == "list")) && (twig_length_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array())) > 1))) {
                // line 32
                echo "                            <div class=\"nav navbar-right btn-group\">
                                ";
                // line 33
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "listModes", array()));
                foreach ($context['_seq'] as $context["mode"] => $context["settings"]) {
                    // line 34
                    echo "                                    <a href=\"";
                    echo twig_escape_filter($this->env, $this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "generateUrl", array(0 => "list", 1 => twig_array_merge($this->getAttribute($this->getAttribute($this->getAttribute(($context["app"] ?? $this->getContext($context, "app")), "request", array()), "query", array()), "all", array()), array("_list_mode" => $context["mode"]))), "method"), "html", null, true);
                    echo "\" class=\"btn btn-default navbar-btn btn-sm";
                    if (($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getListMode", array(), "method") == $context["mode"])) {
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
            if ( !twig_test_empty(($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions")))) {
                // line 40
                echo "                            ";
                echo ($context["_list_filters_actions"] ?? $this->getContext($context, "_list_filters_actions"));
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
            if (trim(($context["_list_filters"] ?? $this->getContext($context, "_list_filters")))) {
                // line 49
                echo "             <div class=\"row\">
                 ";
                // line 50
                echo ($context["_list_filters"] ?? $this->getContext($context, "_list_filters"));
                echo "
             </div>
        ";
            }
            // line 53
            echo "
        <div class=\"row\">
            ";
            // line 55
            echo ($context["_list_table"] ?? $this->getContext($context, "_list_table"));
            echo "
        </div>
    </div>
     ";
        }
        // line 59
        echo "
";
        
        $__internal_804ee0df63eadff015d7cd2c434d53a35578a06a19345836b7c280b3c581753e->leave($__internal_804ee0df63eadff015d7cd2c434d53a35578a06a19345836b7c280b3c581753e_prof);

        
        $__internal_bdcc87512e28d6dec97735edafbd9d0be8e68729e3149b1fb662d9622fa82cc6->leave($__internal_bdcc87512e28d6dec97735edafbd9d0be8e68729e3149b1fb662d9622fa82cc6_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_fa66c738ab9b9c2e3a52d1e89835036c7b8ce9ce16bdb816a82587ff067115c0 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_fa66c738ab9b9c2e3a52d1e89835036c7b8ce9ce16bdb816a82587ff067115c0->enter($__internal_fa66c738ab9b9c2e3a52d1e89835036c7b8ce9ce16bdb816a82587ff067115c0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_ca489df0454ddeafaed4e4be6602a8febe5ad1b233059f9434cbe43a2cac38f1 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ca489df0454ddeafaed4e4be6602a8febe5ad1b233059f9434cbe43a2cac38f1->enter($__internal_ca489df0454ddeafaed4e4be6602a8febe5ad1b233059f9434cbe43a2cac38f1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_ca489df0454ddeafaed4e4be6602a8febe5ad1b233059f9434cbe43a2cac38f1->leave($__internal_ca489df0454ddeafaed4e4be6602a8febe5ad1b233059f9434cbe43a2cac38f1_prof);

        
        $__internal_fa66c738ab9b9c2e3a52d1e89835036c7b8ce9ce16bdb816a82587ff067115c0->leave($__internal_fa66c738ab9b9c2e3a52d1e89835036c7b8ce9ce16bdb816a82587ff067115c0_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_794314424b9be48d71565abef1d179e5c5a6fa45eaaac4589599bcafdfb47aa8 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_794314424b9be48d71565abef1d179e5c5a6fa45eaaac4589599bcafdfb47aa8->enter($__internal_794314424b9be48d71565abef1d179e5c5a6fa45eaaac4589599bcafdfb47aa8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_c7260ae4dbf6f0f70f5c62e5db3c67fb5f880feb55d51ed5871e15250d755d20 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c7260ae4dbf6f0f70f5c62e5db3c67fb5f880feb55d51ed5871e15250d755d20->enter($__internal_c7260ae4dbf6f0f70f5c62e5db3c67fb5f880feb55d51ed5871e15250d755d20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_c7260ae4dbf6f0f70f5c62e5db3c67fb5f880feb55d51ed5871e15250d755d20->leave($__internal_c7260ae4dbf6f0f70f5c62e5db3c67fb5f880feb55d51ed5871e15250d755d20_prof);

        
        $__internal_794314424b9be48d71565abef1d179e5c5a6fa45eaaac4589599bcafdfb47aa8->leave($__internal_794314424b9be48d71565abef1d179e5c5a6fa45eaaac4589599bcafdfb47aa8_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_0660658d949cbe12aaf770b3e8de18d33dcedb2eb4eccdb8c42a8f84a95adf0a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_0660658d949cbe12aaf770b3e8de18d33dcedb2eb4eccdb8c42a8f84a95adf0a->enter($__internal_0660658d949cbe12aaf770b3e8de18d33dcedb2eb4eccdb8c42a8f84a95adf0a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_ceadbf69294684719ebd1eb4b1efa2a75c4c3e833242b42a5b3ff1584cb04050 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ceadbf69294684719ebd1eb4b1efa2a75c4c3e833242b42a5b3ff1584cb04050->enter($__internal_ceadbf69294684719ebd1eb4b1efa2a75c4c3e833242b42a5b3ff1584cb04050_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_ceadbf69294684719ebd1eb4b1efa2a75c4c3e833242b42a5b3ff1584cb04050->leave($__internal_ceadbf69294684719ebd1eb4b1efa2a75c4c3e833242b42a5b3ff1584cb04050_prof);

        
        $__internal_0660658d949cbe12aaf770b3e8de18d33dcedb2eb4eccdb8c42a8f84a95adf0a->leave($__internal_0660658d949cbe12aaf770b3e8de18d33dcedb2eb4eccdb8c42a8f84a95adf0a_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_9de67c1a5bf4a253ffa7098be9909826a44b3bb6fbf5c8b9b25b2235b3c877a6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_9de67c1a5bf4a253ffa7098be9909826a44b3bb6fbf5c8b9b25b2235b3c877a6->enter($__internal_9de67c1a5bf4a253ffa7098be9909826a44b3bb6fbf5c8b9b25b2235b3c877a6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_e814bb556bcad10ecf88c6fd7665a6388304aa3aae06ad5adb18ad606a76d0cb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_e814bb556bcad10ecf88c6fd7665a6388304aa3aae06ad5adb18ad606a76d0cb->enter($__internal_e814bb556bcad10ecf88c6fd7665a6388304aa3aae06ad5adb18ad606a76d0cb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_e814bb556bcad10ecf88c6fd7665a6388304aa3aae06ad5adb18ad606a76d0cb->leave($__internal_e814bb556bcad10ecf88c6fd7665a6388304aa3aae06ad5adb18ad606a76d0cb_prof);

        
        $__internal_9de67c1a5bf4a253ffa7098be9909826a44b3bb6fbf5c8b9b25b2235b3c877a6->leave($__internal_9de67c1a5bf4a253ffa7098be9909826a44b3bb6fbf5c8b9b25b2235b3c877a6_prof);

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
", "@SonataAdmin/ajax_layout.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/ajax_layout.html.twig");
    }
}
