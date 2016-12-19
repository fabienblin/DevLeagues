<?php

/* FOSUserBundle::layout.html.twig */
class __TwigTemplate_0d424cdc80d178afe334f8198c4084a5cf212c369d77551b927e48eb567da0b3 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("DevLeaguesBundle::base.html.twig", "FOSUserBundle::layout.html.twig", 1);
        $this->blocks = array(
            'body' => array($this, 'block_body'),
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "DevLeaguesBundle::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ea2705738b76e42f9fbe5a538dbd8bffc90763189fccc4174ff77c90b014fed0 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ea2705738b76e42f9fbe5a538dbd8bffc90763189fccc4174ff77c90b014fed0->enter($__internal_ea2705738b76e42f9fbe5a538dbd8bffc90763189fccc4174ff77c90b014fed0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle::layout.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ea2705738b76e42f9fbe5a538dbd8bffc90763189fccc4174ff77c90b014fed0->leave($__internal_ea2705738b76e42f9fbe5a538dbd8bffc90763189fccc4174ff77c90b014fed0_prof);

    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        $__internal_6b3eb17821fc1e2bcb624d8dee55eed3d0aff010d742bf8539f5439da7ad3bc8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_6b3eb17821fc1e2bcb624d8dee55eed3d0aff010d742bf8539f5439da7ad3bc8->enter($__internal_6b3eb17821fc1e2bcb624d8dee55eed3d0aff010d742bf8539f5439da7ad3bc8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "
<div>
\t";
        // line 6
        if ($this->env->getExtension('Symfony\Bridge\Twig\Extension\SecurityExtension')->isGranted("IS_AUTHENTICATED_REMEMBERED")) {
            // line 7
            echo "\t\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logged_in_as", array("%username%" => $this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "user", array()), "username", array())), "FOSUserBundle"), "html", null, true);
            echo " |
\t\t<a href=\"";
            // line 8
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_logout");
            echo "\">
\t\t\t";
            // line 9
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.logout", array(), "FOSUserBundle"), "html", null, true);
            echo "
\t\t</a>
\t";
        } else {
            // line 12
            echo "\t\t<a href=\"";
            echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("fos_user_security_login");
            echo "\">";
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("layout.login", array(), "FOSUserBundle"), "html", null, true);
            echo "</a>
\t";
        }
        // line 14
        echo "</div>

";
        // line 16
        if ($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "request", array()), "hasPreviousSession", array())) {
            // line 17
            echo "\t";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["app"]) ? $context["app"] : $this->getContext($context, "app")), "session", array()), "flashbag", array()), "all", array(), "method"));
            foreach ($context['_seq'] as $context["type"] => $context["messages"]) {
                // line 18
                echo "\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($context["messages"]);
                foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                    // line 19
                    echo "\t\t\t<div class=\"flash-";
                    echo twig_escape_filter($this->env, $context["type"], "html", null, true);
                    echo "\">
\t\t\t\t";
                    // line 20
                    echo twig_escape_filter($this->env, $context["message"], "html", null, true);
                    echo "
\t\t\t</div>
\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['message'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 23
                echo "\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['type'], $context['messages'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        // line 25
        echo "
<div>
\t";
        // line 27
        $this->displayBlock('fos_user_content', $context, $blocks);
        // line 29
        echo "</div>

";
        
        $__internal_6b3eb17821fc1e2bcb624d8dee55eed3d0aff010d742bf8539f5439da7ad3bc8->leave($__internal_6b3eb17821fc1e2bcb624d8dee55eed3d0aff010d742bf8539f5439da7ad3bc8_prof);

    }

    // line 27
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_0240f487f920934643e58abbde37c77e9c25c8405cb0bb748184c3bc88467a3c = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_0240f487f920934643e58abbde37c77e9c25c8405cb0bb748184c3bc88467a3c->enter($__internal_0240f487f920934643e58abbde37c77e9c25c8405cb0bb748184c3bc88467a3c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 28
        echo "\t";
        
        $__internal_0240f487f920934643e58abbde37c77e9c25c8405cb0bb748184c3bc88467a3c->leave($__internal_0240f487f920934643e58abbde37c77e9c25c8405cb0bb748184c3bc88467a3c_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  128 => 28,  122 => 27,  113 => 29,  111 => 27,  107 => 25,  100 => 23,  91 => 20,  86 => 19,  81 => 18,  76 => 17,  74 => 16,  70 => 14,  62 => 12,  56 => 9,  52 => 8,  47 => 7,  45 => 6,  41 => 4,  35 => 3,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'DevLeaguesBundle::base.html.twig' %}

{% block body %}

<div>
\t{% if is_granted(\"IS_AUTHENTICATED_REMEMBERED\") %}
\t\t{{ 'layout.logged_in_as'|trans({'%username%': app.user.username}, 'FOSUserBundle') }} |
\t\t<a href=\"{{ path('fos_user_security_logout') }}\">
\t\t\t{{ 'layout.logout'|trans({}, 'FOSUserBundle') }}
\t\t</a>
\t{% else %}
\t\t<a href=\"{{ path('fos_user_security_login') }}\">{{ 'layout.login'|trans({}, 'FOSUserBundle') }}</a>
\t{% endif %}
</div>

{% if app.request.hasPreviousSession %}
\t{% for type, messages in app.session.flashbag.all() %}
\t\t{% for message in messages %}
\t\t\t<div class=\"flash-{{ type }}\">
\t\t\t\t{{ message }}
\t\t\t</div>
\t\t{% endfor %}
\t{% endfor %}
{% endif %}

<div>
\t{% block fos_user_content %}
\t{% endblock fos_user_content %}
</div>

{% endblock %}
", "FOSUserBundle::layout.html.twig", "/var/www/html/devleagues/github/app/Resources/FOSUserBundle/views/layout.html.twig");
    }
}
