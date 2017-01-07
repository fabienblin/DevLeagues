<?php

/* @SonataAdmin/CRUD/list__action.html.twig */
class __TwigTemplate_89c2f4ee1d0ff7e9da8bb949dd499f8504364f6cddfacdfd4715f74f27b38777 extends Twig_Template
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
        return $this->loadTemplate($this->getAttribute((isset($context["admin"]) ? $context["admin"] : $this->getContext($context, "admin")), "getTemplate", array(0 => "base_list_field"), "method"), "@SonataAdmin/CRUD/list__action.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2d8560dd3a9d980fb0028de95aa41b3ac2fb1ffedd79e50f152cc977f8a6e96c = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2d8560dd3a9d980fb0028de95aa41b3ac2fb1ffedd79e50f152cc977f8a6e96c->enter($__internal_2d8560dd3a9d980fb0028de95aa41b3ac2fb1ffedd79e50f152cc977f8a6e96c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $__internal_47b8365f83d0046874387537a985b6a63da5a8d0fa77adbaa0f661173cb756e7 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_47b8365f83d0046874387537a985b6a63da5a8d0fa77adbaa0f661173cb756e7->enter($__internal_47b8365f83d0046874387537a985b6a63da5a8d0fa77adbaa0f661173cb756e7_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2d8560dd3a9d980fb0028de95aa41b3ac2fb1ffedd79e50f152cc977f8a6e96c->leave($__internal_2d8560dd3a9d980fb0028de95aa41b3ac2fb1ffedd79e50f152cc977f8a6e96c_prof);

        
        $__internal_47b8365f83d0046874387537a985b6a63da5a8d0fa77adbaa0f661173cb756e7->leave($__internal_47b8365f83d0046874387537a985b6a63da5a8d0fa77adbaa0f661173cb756e7_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_6a11b6a99c674d13c29a1a9f8638390ec9e7c5528301d08ee2c4a520662fd020 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_6a11b6a99c674d13c29a1a9f8638390ec9e7c5528301d08ee2c4a520662fd020->enter($__internal_6a11b6a99c674d13c29a1a9f8638390ec9e7c5528301d08ee2c4a520662fd020_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_f5bf9c2589de7a7f38caf8700c75b0176896d3b0cb632d151a0bbded25af96f0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_f5bf9c2589de7a7f38caf8700c75b0176896d3b0cb632d151a0bbded25af96f0->enter($__internal_f5bf9c2589de7a7f38caf8700c75b0176896d3b0cb632d151a0bbded25af96f0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        // line 15
        echo "    <div class=\"btn-group\">
        ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute((isset($context["field_description"]) ? $context["field_description"] : $this->getContext($context, "field_description")), "options", array()), "actions", array()));
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
        
        $__internal_f5bf9c2589de7a7f38caf8700c75b0176896d3b0cb632d151a0bbded25af96f0->leave($__internal_f5bf9c2589de7a7f38caf8700c75b0176896d3b0cb632d151a0bbded25af96f0_prof);

        
        $__internal_6a11b6a99c674d13c29a1a9f8638390ec9e7c5528301d08ee2c4a520662fd020->leave($__internal_6a11b6a99c674d13c29a1a9f8638390ec9e7c5528301d08ee2c4a520662fd020_prof);

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
", "@SonataAdmin/CRUD/list__action.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/list__action.html.twig");
    }
}
