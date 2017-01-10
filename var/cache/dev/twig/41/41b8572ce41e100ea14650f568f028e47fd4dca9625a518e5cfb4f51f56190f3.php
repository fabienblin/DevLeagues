<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_d8403c42d07eb41a1331082671419889316db55b146d724e78bd37bbcca990f9 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->blocks = array(
            'field' => array($this, 'block_field'),
        );
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_86ccd4a8224f7b1a873addadccbd2be0ec53fcd9625fd99e196744c55328b92d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_86ccd4a8224f7b1a873addadccbd2be0ec53fcd9625fd99e196744c55328b92d->enter($__internal_86ccd4a8224f7b1a873addadccbd2be0ec53fcd9625fd99e196744c55328b92d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $__internal_12805045146d31372ec1216ad23b9b5ea3e7138dc6737d71769424782bb1cbf8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_12805045146d31372ec1216ad23b9b5ea3e7138dc6737d71769424782bb1cbf8->enter($__internal_12805045146d31372ec1216ad23b9b5ea3e7138dc6737d71769424782bb1cbf8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_86ccd4a8224f7b1a873addadccbd2be0ec53fcd9625fd99e196744c55328b92d->leave($__internal_86ccd4a8224f7b1a873addadccbd2be0ec53fcd9625fd99e196744c55328b92d_prof);

        
        $__internal_12805045146d31372ec1216ad23b9b5ea3e7138dc6737d71769424782bb1cbf8->leave($__internal_12805045146d31372ec1216ad23b9b5ea3e7138dc6737d71769424782bb1cbf8_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_d72c9089c04d96dd8b436696f976b9ca2fb33eb6161ac961f79cb9c61f74cc2a = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_d72c9089c04d96dd8b436696f976b9ca2fb33eb6161ac961f79cb9c61f74cc2a->enter($__internal_d72c9089c04d96dd8b436696f976b9ca2fb33eb6161ac961f79cb9c61f74cc2a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_4788ea85284c8fb31120ea7242b34e7f4dd72d1d1938d45f13f015324cc4afc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_4788ea85284c8fb31120ea7242b34e7f4dd72d1d1938d45f13f015324cc4afc8->enter($__internal_4788ea85284c8fb31120ea7242b34e7f4dd72d1d1938d45f13f015324cc4afc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "    ";
        echo $this->getAttribute($this, "render_array", array(0 => ($context["value"] ?? $this->getContext($context, "value"))), "method");
        echo "
";
        
        $__internal_4788ea85284c8fb31120ea7242b34e7f4dd72d1d1938d45f13f015324cc4afc8->leave($__internal_4788ea85284c8fb31120ea7242b34e7f4dd72d1d1938d45f13f015324cc4afc8_prof);

        
        $__internal_d72c9089c04d96dd8b436696f976b9ca2fb33eb6161ac961f79cb9c61f74cc2a->leave($__internal_d72c9089c04d96dd8b436696f976b9ca2fb33eb6161ac961f79cb9c61f74cc2a_prof);

    }

    // line 11
    public function getrender_array($__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            $__internal_5070628185e0b70db5f3e31a2bd8990a722bf26d6085ed55ac035791b0f30cfb = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_5070628185e0b70db5f3e31a2bd8990a722bf26d6085ed55ac035791b0f30cfb->enter($__internal_5070628185e0b70db5f3e31a2bd8990a722bf26d6085ed55ac035791b0f30cfb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_6575aecc99bc0b3d9f4f6e8b0f564ea77432daec9d42a89d3ca5ba9654af912e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_6575aecc99bc0b3d9f4f6e8b0f564ea77432daec9d42a89d3ca5ba9654af912e->enter($__internal_6575aecc99bc0b3d9f4f6e8b0f564ea77432daec9d42a89d3ca5ba9654af912e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["value"] ?? $this->getContext($context, "value")));
            foreach ($context['_seq'] as $context["key"] => $context["val"]) {
                // line 13
                echo "        ";
                if (twig_test_iterable($context["val"])) {
                    // line 14
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo $this->getAttribute($this, "render_array", array(0 => $context["val"]), "method");
                    echo "}]
        ";
                } else {
                    // line 16
                    echo "            [";
                    echo twig_escape_filter($this->env, $context["key"], "html", null, true);
                    echo " => ";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "]
        ";
                }
                // line 18
                echo "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            
            $__internal_6575aecc99bc0b3d9f4f6e8b0f564ea77432daec9d42a89d3ca5ba9654af912e->leave($__internal_6575aecc99bc0b3d9f4f6e8b0f564ea77432daec9d42a89d3ca5ba9654af912e_prof);

            
            $__internal_5070628185e0b70db5f3e31a2bd8990a722bf26d6085ed55ac035791b0f30cfb->leave($__internal_5070628185e0b70db5f3e31a2bd8990a722bf26d6085ed55ac035791b0f30cfb_prof);

        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 18,  95 => 16,  87 => 14,  84 => 13,  79 => 12,  61 => 11,  48 => 24,  39 => 23,  18 => 21,);
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
{%  macro render_array(value) %}
    {% for key, val in value %}
        {% if val is iterable %}
            [{{ key }} => {{ _self.render_array(val) }}}]
        {%  else %}
            [{{ key }} => {{ val }}]
        {%  endif %}
    {% endfor %}
{% endmacro %}

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    {{ _self.render_array(value) }}
{% endblock %}
", "@SonataAdmin/CRUD/list_array.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
