<?php

/* @SonataAdmin/CRUD/list__action.html.twig */
class __TwigTemplate_09d3d92b613713d8d1bf0893fc2eaf5c3d8cdd2ea2d89c5af639820adcae4164 extends Twig_Template
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
        $__internal_1b766eef275aa57ed6d1793b3939b81060cc2f4b7e8242a8f176473e7041341d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1b766eef275aa57ed6d1793b3939b81060cc2f4b7e8242a8f176473e7041341d->enter($__internal_1b766eef275aa57ed6d1793b3939b81060cc2f4b7e8242a8f176473e7041341d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $__internal_0093550ebdf1a48eb79e7def54dce7a5dd4549fd4540940acd7c625b79363352 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0093550ebdf1a48eb79e7def54dce7a5dd4549fd4540940acd7c625b79363352->enter($__internal_0093550ebdf1a48eb79e7def54dce7a5dd4549fd4540940acd7c625b79363352_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/list__action.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_1b766eef275aa57ed6d1793b3939b81060cc2f4b7e8242a8f176473e7041341d->leave($__internal_1b766eef275aa57ed6d1793b3939b81060cc2f4b7e8242a8f176473e7041341d_prof);

        
        $__internal_0093550ebdf1a48eb79e7def54dce7a5dd4549fd4540940acd7c625b79363352->leave($__internal_0093550ebdf1a48eb79e7def54dce7a5dd4549fd4540940acd7c625b79363352_prof);

    }

    // line 14
    public function block_field($context, array $blocks = array())
    {
        $__internal_96e6e00606706e1f9aabf5b3066f5c38ca717e8d654d16c8cfc9ece49f59b36f = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_96e6e00606706e1f9aabf5b3066f5c38ca717e8d654d16c8cfc9ece49f59b36f->enter($__internal_96e6e00606706e1f9aabf5b3066f5c38ca717e8d654d16c8cfc9ece49f59b36f_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

        $__internal_649216fee6cbca59e6c78dd3f81e64df2ed6c3a4cb697d237a46ce493f507c1b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_649216fee6cbca59e6c78dd3f81e64df2ed6c3a4cb697d237a46ce493f507c1b->enter($__internal_649216fee6cbca59e6c78dd3f81e64df2ed6c3a4cb697d237a46ce493f507c1b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "field"));

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
        
        $__internal_649216fee6cbca59e6c78dd3f81e64df2ed6c3a4cb697d237a46ce493f507c1b->leave($__internal_649216fee6cbca59e6c78dd3f81e64df2ed6c3a4cb697d237a46ce493f507c1b_prof);

        
        $__internal_96e6e00606706e1f9aabf5b3066f5c38ca717e8d654d16c8cfc9ece49f59b36f->leave($__internal_96e6e00606706e1f9aabf5b3066f5c38ca717e8d654d16c8cfc9ece49f59b36f_prof);

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
