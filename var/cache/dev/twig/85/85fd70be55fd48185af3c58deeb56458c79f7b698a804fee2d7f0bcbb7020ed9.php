<?php

/* @SonataAdmin/CRUD/list__action.html.twig */
class __TwigTemplate_9e8fa4cccbd13e5154a49d8a2941658cd6ab72c11b8aecf5cd843ece4cd27ed3 extends Twig_Template
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
        // line 12
        return $this->loadTemplate($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5b10969c2876a470a31439fbdfe6ca9eacb268d51fcb2b4b69d513ea5f9c331d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5b10969c2876a470a31439fbdfe6ca9eacb268d51fcb2b4b69d513ea5f9c331d->enter($__internal_5b10969c2876a470a31439fbdfe6ca9eacb268d51fcb2b4b69d513ea5f9c331d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $__internal_637f2e95fc8dd049ffdc8c9b132fbd25dd891b266b001f3fc60e952654c5a683 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_637f2e95fc8dd049ffdc8c9b132fbd25dd891b266b001f3fc60e952654c5a683->enter($__internal_637f2e95fc8dd049ffdc8c9b132fbd25dd891b266b001f3fc60e952654c5a683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5b10969c2876a470a31439fbdfe6ca9eacb268d51fcb2b4b69d513ea5f9c331d->leave($__internal_5b10969c2876a470a31439fbdfe6ca9eacb268d51fcb2b4b69d513ea5f9c331d_prof);

        
        $__internal_637f2e95fc8dd049ffdc8c9b132fbd25dd891b266b001f3fc60e952654c5a683->leave($__internal_637f2e95fc8dd049ffdc8c9b132fbd25dd891b266b001f3fc60e952654c5a683_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_675fb16e431a55baf61737ccf74ecddc757ce22bc10e2c2e064006c8d25da181 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_675fb16e431a55baf61737ccf74ecddc757ce22bc10e2c2e064006c8d25da181->enter($__internal_675fb16e431a55baf61737ccf74ecddc757ce22bc10e2c2e064006c8d25da181_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_c8c967a2789026f6d11c6d70891eb7909c607410fc4e1eaed0353b8dcb28645d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_c8c967a2789026f6d11c6d70891eb7909c607410fc4e1eaed0353b8dcb28645d->enter($__internal_c8c967a2789026f6d11c6d70891eb7909c607410fc4e1eaed0353b8dcb28645d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["field_description"] ?? $this->getContext($context, "field_description")), "options", array()), "actions", array()));
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
        foreach ($context['_seq'] as $context["_key"] => $context["actions"]) {
            // line 17
            echo "            ";
            $this->loadTemplate($this->getAttribute($context["actions"], "template", array()), "@SonataAdmin/CRUD/list__action.html.twig", 17)->display($context);
            // line 18
            echo "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actions'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "    </div>
";
        
        $__internal_c8c967a2789026f6d11c6d70891eb7909c607410fc4e1eaed0353b8dcb28645d->leave($__internal_c8c967a2789026f6d11c6d70891eb7909c607410fc4e1eaed0353b8dcb28645d_prof);

        
        $__internal_675fb16e431a55baf61737ccf74ecddc757ce22bc10e2c2e064006c8d25da181->leave($__internal_675fb16e431a55baf61737ccf74ecddc757ce22bc10e2c2e064006c8d25da181_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/list__action.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  85 => 19,  71 => 18,  68 => 17,  51 => 16,  48 => 15,  39 => 14,  18 => 12,);
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

{% extends admin.getTemplate('base_list_field') %}

{% block field %}
    <div class=\"btn-group\">
        {% for actions in field_description.options.actions %}
            {% include actions.template %}
        {% endfor %}
    </div>
{% endblock %}
", "@SonataAdmin/CRUD/list__action.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
