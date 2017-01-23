<?php

/* @SonataAdmin/ajax_layout.html.twig */
class __TwigTemplate_1992421a05ead0e489a6ca5a6be1d536b51d8b302b5032f7c0038eb462573bb2 extends Twig_Template
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
        $__internal_e3e1894ee5566cf969edcf0853d46183aa4f9792b3c2a61194f33511286f5303 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_e3e1894ee5566cf969edcf0853d46183aa4f9792b3c2a61194f33511286f5303->enter($__internal_e3e1894ee5566cf969edcf0853d46183aa4f9792b3c2a61194f33511286f5303_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        $__internal_5da62f5d6487d682230eaab80c683971f0fdce5baa888c77b4fbca3a3d04cb84 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5da62f5d6487d682230eaab80c683971f0fdce5baa888c77b4fbca3a3d04cb84->enter($__internal_5da62f5d6487d682230eaab80c683971f0fdce5baa888c77b4fbca3a3d04cb84_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/ajax_layout.html.twig"));

        // line 11
        echo "
";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        
        $__internal_e3e1894ee5566cf969edcf0853d46183aa4f9792b3c2a61194f33511286f5303->leave($__internal_e3e1894ee5566cf969edcf0853d46183aa4f9792b3c2a61194f33511286f5303_prof);

        
        $__internal_5da62f5d6487d682230eaab80c683971f0fdce5baa888c77b4fbca3a3d04cb84->leave($__internal_5da62f5d6487d682230eaab80c683971f0fdce5baa888c77b4fbca3a3d04cb84_prof);

    }

    public function block_content($context, array $blocks = array())
    {
        $__internal_765a81398b58a819e1f64cdedfbbadfae5a1e9faa495c547ef362f4038990354 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_765a81398b58a819e1f64cdedfbbadfae5a1e9faa495c547ef362f4038990354->enter($__internal_765a81398b58a819e1f64cdedfbbadfae5a1e9faa495c547ef362f4038990354_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_287c422df99640a915add6a5bca76f531a5e27c1833798f65314bb8192f87597 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_287c422df99640a915add6a5bca76f531a5e27c1833798f65314bb8192f87597->enter($__internal_287c422df99640a915add6a5bca76f531a5e27c1833798f65314bb8192f87597_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

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
        
        $__internal_287c422df99640a915add6a5bca76f531a5e27c1833798f65314bb8192f87597->leave($__internal_287c422df99640a915add6a5bca76f531a5e27c1833798f65314bb8192f87597_prof);

        
        $__internal_765a81398b58a819e1f64cdedfbbadfae5a1e9faa495c547ef362f4038990354->leave($__internal_765a81398b58a819e1f64cdedfbbadfae5a1e9faa495c547ef362f4038990354_prof);

    }

    // line 17
    public function block_preview($context, array $blocks = array())
    {
        $__internal_cf15c2b3154170bea5bea2f06b74bd2a95713d8805279922e25393ecc9d7c9d1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_cf15c2b3154170bea5bea2f06b74bd2a95713d8805279922e25393ecc9d7c9d1->enter($__internal_cf15c2b3154170bea5bea2f06b74bd2a95713d8805279922e25393ecc9d7c9d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        $__internal_7508935d46ac725a894cec1f6b03b47ffb49c03fe3baaef5366b2728abdac8f3 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7508935d46ac725a894cec1f6b03b47ffb49c03fe3baaef5366b2728abdac8f3->enter($__internal_7508935d46ac725a894cec1f6b03b47ffb49c03fe3baaef5366b2728abdac8f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "preview"));

        
        $__internal_7508935d46ac725a894cec1f6b03b47ffb49c03fe3baaef5366b2728abdac8f3->leave($__internal_7508935d46ac725a894cec1f6b03b47ffb49c03fe3baaef5366b2728abdac8f3_prof);

        
        $__internal_cf15c2b3154170bea5bea2f06b74bd2a95713d8805279922e25393ecc9d7c9d1->leave($__internal_cf15c2b3154170bea5bea2f06b74bd2a95713d8805279922e25393ecc9d7c9d1_prof);

    }

    // line 18
    public function block_form($context, array $blocks = array())
    {
        $__internal_610741888b127a4617aa09aeae709e84a7de5c5177981b4a9d49b3f4692078cd = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_610741888b127a4617aa09aeae709e84a7de5c5177981b4a9d49b3f4692078cd->enter($__internal_610741888b127a4617aa09aeae709e84a7de5c5177981b4a9d49b3f4692078cd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        $__internal_6a3eaba605a5c462d5fc706c89f53d3beeebed0ad55ecdbdf1dd3d2b3cc9f476 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6a3eaba605a5c462d5fc706c89f53d3beeebed0ad55ecdbdf1dd3d2b3cc9f476->enter($__internal_6a3eaba605a5c462d5fc706c89f53d3beeebed0ad55ecdbdf1dd3d2b3cc9f476_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "form"));

        
        $__internal_6a3eaba605a5c462d5fc706c89f53d3beeebed0ad55ecdbdf1dd3d2b3cc9f476->leave($__internal_6a3eaba605a5c462d5fc706c89f53d3beeebed0ad55ecdbdf1dd3d2b3cc9f476_prof);

        
        $__internal_610741888b127a4617aa09aeae709e84a7de5c5177981b4a9d49b3f4692078cd->leave($__internal_610741888b127a4617aa09aeae709e84a7de5c5177981b4a9d49b3f4692078cd_prof);

    }

    // line 19
    public function block_list($context, array $blocks = array())
    {
        $__internal_2bb1520a86787cdebe2cd6b517c209524966210d2b016be365a7e82c846c38ac = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2bb1520a86787cdebe2cd6b517c209524966210d2b016be365a7e82c846c38ac->enter($__internal_2bb1520a86787cdebe2cd6b517c209524966210d2b016be365a7e82c846c38ac_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        $__internal_bc56ca3263803a37e3464d5e1bd86eee5ba698f33034713452081ed48021c635 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_bc56ca3263803a37e3464d5e1bd86eee5ba698f33034713452081ed48021c635->enter($__internal_bc56ca3263803a37e3464d5e1bd86eee5ba698f33034713452081ed48021c635_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "list"));

        
        $__internal_bc56ca3263803a37e3464d5e1bd86eee5ba698f33034713452081ed48021c635->leave($__internal_bc56ca3263803a37e3464d5e1bd86eee5ba698f33034713452081ed48021c635_prof);

        
        $__internal_2bb1520a86787cdebe2cd6b517c209524966210d2b016be365a7e82c846c38ac->leave($__internal_2bb1520a86787cdebe2cd6b517c209524966210d2b016be365a7e82c846c38ac_prof);

    }

    // line 20
    public function block_show($context, array $blocks = array())
    {
        $__internal_c727cb0c94116d55ce30556334cfcad10201911af4152a335cab253080da3083 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_c727cb0c94116d55ce30556334cfcad10201911af4152a335cab253080da3083->enter($__internal_c727cb0c94116d55ce30556334cfcad10201911af4152a335cab253080da3083_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        $__internal_5706ca7a9123472a489c5d6606b8aac79d8d49eacd1de017746a16c0b8a1fdcb = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5706ca7a9123472a489c5d6606b8aac79d8d49eacd1de017746a16c0b8a1fdcb->enter($__internal_5706ca7a9123472a489c5d6606b8aac79d8d49eacd1de017746a16c0b8a1fdcb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "show"));

        
        $__internal_5706ca7a9123472a489c5d6606b8aac79d8d49eacd1de017746a16c0b8a1fdcb->leave($__internal_5706ca7a9123472a489c5d6606b8aac79d8d49eacd1de017746a16c0b8a1fdcb_prof);

        
        $__internal_c727cb0c94116d55ce30556334cfcad10201911af4152a335cab253080da3083->leave($__internal_c727cb0c94116d55ce30556334cfcad10201911af4152a335cab253080da3083_prof);

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
