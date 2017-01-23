<?php

/* @SonataAdmin/CRUD/action_buttons.html.twig */
class __TwigTemplate_919aa1217bc081e493875d5c5b046c71f0a0e587aade35d2c5be62b129b71373 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1ccb4c4a3ef1b40ff4dac2b7d7912c963aa291ca63eddbc536f90e67d34326d6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_1ccb4c4a3ef1b40ff4dac2b7d7912c963aa291ca63eddbc536f90e67d34326d6->enter($__internal_1ccb4c4a3ef1b40ff4dac2b7d7912c963aa291ca63eddbc536f90e67d34326d6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action_buttons.html.twig"));

        $__internal_df95c7ff154e9cf332657f0d55a0d91ebde41a2f6b370eba78a84ee2fc62c8d0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_df95c7ff154e9cf332657f0d55a0d91ebde41a2f6b370eba78a84ee2fc62c8d0->enter($__internal_df95c7ff154e9cf332657f0d55a0d91ebde41a2f6b370eba78a84ee2fc62c8d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/action_buttons.html.twig"));

        // line 11
        ob_start();
        // line 12
        echo "    ";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["admin"] ?? $this->getContext($context, "admin")), "getActionButtons", array(0 => ($context["action"] ?? $this->getContext($context, "action")), 1 => ((array_key_exists("object", $context)) ? (_twig_default_filter(($context["object"] ?? $this->getContext($context, "object")), null)) : (null))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 13
            echo "        ";
            if ($this->getAttribute($context["item"], "template", array(), "any", true, true)) {
                // line 14
                echo "            <li>";
                $this->loadTemplate($this->getAttribute($context["item"], "template", array()), "@SonataAdmin/CRUD/action_buttons.html.twig", 14)->display($context);
                echo "</li>
        ";
            }
            // line 16
            echo "    ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo trim(preg_replace('/>\s+</', '><', ob_get_clean()));
        
        $__internal_1ccb4c4a3ef1b40ff4dac2b7d7912c963aa291ca63eddbc536f90e67d34326d6->leave($__internal_1ccb4c4a3ef1b40ff4dac2b7d7912c963aa291ca63eddbc536f90e67d34326d6_prof);

        
        $__internal_df95c7ff154e9cf332657f0d55a0d91ebde41a2f6b370eba78a84ee2fc62c8d0->leave($__internal_df95c7ff154e9cf332657f0d55a0d91ebde41a2f6b370eba78a84ee2fc62c8d0_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/action_buttons.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  54 => 16,  48 => 14,  45 => 13,  27 => 12,  25 => 11,);
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
{% spaceless %}
    {% for item in admin.getActionButtons(action, object|default(null)) %}
        {% if item.template is defined %}
            <li>{% include item.template %}</li>
        {% endif %}
    {% endfor %}
{% endspaceless %}
", "@SonataAdmin/CRUD/action_buttons.html.twig", "/home/webmaster/www/public_html/DevLeagues/vendor/sonata-project/admin-bundle/Resources/views/CRUD/action_buttons.html.twig");
    }
}
