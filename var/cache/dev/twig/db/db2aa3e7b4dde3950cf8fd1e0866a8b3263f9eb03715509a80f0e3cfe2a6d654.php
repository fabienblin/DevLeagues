<?php

/* @SonataAdmin/CRUD/list_array.html.twig */
class __TwigTemplate_b506f067bc08399730fff77aca28884669ae6dbba022ccfa9777fa86f219c1fb extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list_array.html.twig", 21);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_da835e4c06fd202c313bc53647c835d073d3364f76c11e3209942de532f34796 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_da835e4c06fd202c313bc53647c835d073d3364f76c11e3209942de532f34796->enter($__internal_da835e4c06fd202c313bc53647c835d073d3364f76c11e3209942de532f34796_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $__internal_ab6ffcc1d2ebcfce6cc752a7f530bc27bbfe7010a3687f47883f564e7c60d765 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ab6ffcc1d2ebcfce6cc752a7f530bc27bbfe7010a3687f47883f564e7c60d765->enter($__internal_ab6ffcc1d2ebcfce6cc752a7f530bc27bbfe7010a3687f47883f564e7c60d765_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_da835e4c06fd202c313bc53647c835d073d3364f76c11e3209942de532f34796->leave($__internal_da835e4c06fd202c313bc53647c835d073d3364f76c11e3209942de532f34796_prof);

        
        $__internal_ab6ffcc1d2ebcfce6cc752a7f530bc27bbfe7010a3687f47883f564e7c60d765->leave($__internal_ab6ffcc1d2ebcfce6cc752a7f530bc27bbfe7010a3687f47883f564e7c60d765_prof);

    }

    // line 23
    public function block_field($context, array $blocks = array())
    {
        $__internal_ab3f84d97625525f7ded38be0cdc91129383c951596a180d41b6f0a5ed877a79 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ab3f84d97625525f7ded38be0cdc91129383c951596a180d41b6f0a5ed877a79->enter($__internal_ab3f84d97625525f7ded38be0cdc91129383c951596a180d41b6f0a5ed877a79_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_7022d9bd0bbccd275fcccf94a44899e1737e4a784be14ede08ec917b30e0adca = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_7022d9bd0bbccd275fcccf94a44899e1737e4a784be14ede08ec917b30e0adca->enter($__internal_7022d9bd0bbccd275fcccf94a44899e1737e4a784be14ede08ec917b30e0adca_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 24
        echo "    ";
        echo $this->getAttribute($this, "render_array", array(0 => (isset($context["value"]) ? $context["value"] : $this->getContext($context, "value"))), "method");
        echo "
";
        
        $__internal_7022d9bd0bbccd275fcccf94a44899e1737e4a784be14ede08ec917b30e0adca->leave($__internal_7022d9bd0bbccd275fcccf94a44899e1737e4a784be14ede08ec917b30e0adca_prof);

        
        $__internal_ab3f84d97625525f7ded38be0cdc91129383c951596a180d41b6f0a5ed877a79->leave($__internal_ab3f84d97625525f7ded38be0cdc91129383c951596a180d41b6f0a5ed877a79_prof);

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
            $__internal_666a0645d6db6c235e206b43293826ec1b5178f6223f9ab466e9f880a9dec923 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
            $__internal_666a0645d6db6c235e206b43293826ec1b5178f6223f9ab466e9f880a9dec923->enter($__internal_666a0645d6db6c235e206b43293826ec1b5178f6223f9ab466e9f880a9dec923_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            $__internal_9ac85f97533d37a2c81ae2b2359065a5b539980a253c1aa0c893bc002605bff9 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
            $__internal_9ac85f97533d37a2c81ae2b2359065a5b539980a253c1aa0c893bc002605bff9->enter($__internal_9ac85f97533d37a2c81ae2b2359065a5b539980a253c1aa0c893bc002605bff9_prof = new Twig_Profiler_Profile($this->getTemplateName(), "macro", "render_array"));

            // line 12
            echo "    ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["value"]) ? $context["value"] : $this->getContext($context, "value")));
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
            
            $__internal_9ac85f97533d37a2c81ae2b2359065a5b539980a253c1aa0c893bc002605bff9->leave($__internal_9ac85f97533d37a2c81ae2b2359065a5b539980a253c1aa0c893bc002605bff9_prof);

            
            $__internal_666a0645d6db6c235e206b43293826ec1b5178f6223f9ab466e9f880a9dec923->leave($__internal_666a0645d6db6c235e206b43293826ec1b5178f6223f9ab466e9f880a9dec923_prof);

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
", "@SonataAdmin/CRUD/list_array.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list_array.html.twig");
    }
}
