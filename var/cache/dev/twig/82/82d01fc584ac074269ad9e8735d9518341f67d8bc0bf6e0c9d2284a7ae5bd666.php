<?php

/* base.html.twig */
class __TwigTemplate_cacd7f907f0910a55478f2ca82ba671e5a943e7660e0f1c586ccde91d006e5cb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_60e3b57f7bf1c156c008ce1f4b1bb894d856c3c38e6fa9b9e767dc83c0810eee = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_60e3b57f7bf1c156c008ce1f4b1bb894d856c3c38e6fa9b9e767dc83c0810eee->enter($__internal_60e3b57f7bf1c156c008ce1f4b1bb894d856c3c38e6fa9b9e767dc83c0810eee_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_196674385485aee110cd0e0c5fea79c2202d9d1b67f0e34c9755fbb7a87a4cef = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_196674385485aee110cd0e0c5fea79c2202d9d1b67f0e34c9755fbb7a87a4cef->enter($__internal_196674385485aee110cd0e0c5fea79c2202d9d1b67f0e34c9755fbb7a87a4cef_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 6
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 7
        echo "        <link rel=\"icon\" type=\"image/x-icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\AssetExtension')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        ";
        // line 10
        $this->displayBlock('body', $context, $blocks);
        // line 11
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 12
        echo "    </body>
</html>
";
        
        $__internal_60e3b57f7bf1c156c008ce1f4b1bb894d856c3c38e6fa9b9e767dc83c0810eee->leave($__internal_60e3b57f7bf1c156c008ce1f4b1bb894d856c3c38e6fa9b9e767dc83c0810eee_prof);

        
        $__internal_196674385485aee110cd0e0c5fea79c2202d9d1b67f0e34c9755fbb7a87a4cef->leave($__internal_196674385485aee110cd0e0c5fea79c2202d9d1b67f0e34c9755fbb7a87a4cef_prof);

    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        $__internal_ec8de52289f7e27480f9ef7d25a3ac8786e671e2cc29fda374972986fc18b365 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_ec8de52289f7e27480f9ef7d25a3ac8786e671e2cc29fda374972986fc18b365->enter($__internal_ec8de52289f7e27480f9ef7d25a3ac8786e671e2cc29fda374972986fc18b365_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_b7b0fdb7bb8201fd49f9b4e8ac73ecbdf62b2f15dbc65b978b515e4d6314b76b = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_b7b0fdb7bb8201fd49f9b4e8ac73ecbdf62b2f15dbc65b978b515e4d6314b76b->enter($__internal_b7b0fdb7bb8201fd49f9b4e8ac73ecbdf62b2f15dbc65b978b515e4d6314b76b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Coucou tu veux voir mon git ?";
        
        $__internal_b7b0fdb7bb8201fd49f9b4e8ac73ecbdf62b2f15dbc65b978b515e4d6314b76b->leave($__internal_b7b0fdb7bb8201fd49f9b4e8ac73ecbdf62b2f15dbc65b978b515e4d6314b76b_prof);

        
        $__internal_ec8de52289f7e27480f9ef7d25a3ac8786e671e2cc29fda374972986fc18b365->leave($__internal_ec8de52289f7e27480f9ef7d25a3ac8786e671e2cc29fda374972986fc18b365_prof);

    }

    // line 6
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_41731420cd775491a21a6e1124e7e897343face0809895aa551cf2244edcfb20 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_41731420cd775491a21a6e1124e7e897343face0809895aa551cf2244edcfb20->enter($__internal_41731420cd775491a21a6e1124e7e897343face0809895aa551cf2244edcfb20_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_671beb6857ba83cda990d756d14c364f4d28fad8859d76df239308461d56562d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_671beb6857ba83cda990d756d14c364f4d28fad8859d76df239308461d56562d->enter($__internal_671beb6857ba83cda990d756d14c364f4d28fad8859d76df239308461d56562d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        
        $__internal_671beb6857ba83cda990d756d14c364f4d28fad8859d76df239308461d56562d->leave($__internal_671beb6857ba83cda990d756d14c364f4d28fad8859d76df239308461d56562d_prof);

        
        $__internal_41731420cd775491a21a6e1124e7e897343face0809895aa551cf2244edcfb20->leave($__internal_41731420cd775491a21a6e1124e7e897343face0809895aa551cf2244edcfb20_prof);

    }

    // line 10
    public function block_body($context, array $blocks = array())
    {
        $__internal_483904efed3a8d527449c8446766a6ce438ae352eacbe1f62831f228be8f0996 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_483904efed3a8d527449c8446766a6ce438ae352eacbe1f62831f228be8f0996->enter($__internal_483904efed3a8d527449c8446766a6ce438ae352eacbe1f62831f228be8f0996_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_95771f8fd1fa612563a077e310a420c0b63c3e7aab6b2280a5b87d33a6f55ef8 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_95771f8fd1fa612563a077e310a420c0b63c3e7aab6b2280a5b87d33a6f55ef8->enter($__internal_95771f8fd1fa612563a077e310a420c0b63c3e7aab6b2280a5b87d33a6f55ef8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        
        $__internal_95771f8fd1fa612563a077e310a420c0b63c3e7aab6b2280a5b87d33a6f55ef8->leave($__internal_95771f8fd1fa612563a077e310a420c0b63c3e7aab6b2280a5b87d33a6f55ef8_prof);

        
        $__internal_483904efed3a8d527449c8446766a6ce438ae352eacbe1f62831f228be8f0996->leave($__internal_483904efed3a8d527449c8446766a6ce438ae352eacbe1f62831f228be8f0996_prof);

    }

    // line 11
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_8e82aeffd562289c155e94689070b4f954352131ae1c218f71e8cc5344bbee05 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_8e82aeffd562289c155e94689070b4f954352131ae1c218f71e8cc5344bbee05->enter($__internal_8e82aeffd562289c155e94689070b4f954352131ae1c218f71e8cc5344bbee05_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_aecec5dd2384cc926f06396feeb4d752cf924ac936616d641b3c090174074823 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_aecec5dd2384cc926f06396feeb4d752cf924ac936616d641b3c090174074823->enter($__internal_aecec5dd2384cc926f06396feeb4d752cf924ac936616d641b3c090174074823_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_aecec5dd2384cc926f06396feeb4d752cf924ac936616d641b3c090174074823->leave($__internal_aecec5dd2384cc926f06396feeb4d752cf924ac936616d641b3c090174074823_prof);

        
        $__internal_8e82aeffd562289c155e94689070b4f954352131ae1c218f71e8cc5344bbee05->leave($__internal_8e82aeffd562289c155e94689070b4f954352131ae1c218f71e8cc5344bbee05_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  117 => 11,  100 => 10,  83 => 6,  65 => 5,  53 => 12,  50 => 11,  48 => 10,  41 => 7,  39 => 6,  35 => 5,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\" />
        <title>{% block title %}Coucou tu veux voir mon git ?{% endblock %}</title>
        {% block stylesheets %}{% endblock %}
        <link rel=\"icon\" type=\"image/x-icon\" href=\"{{ asset('favicon.ico') }}\" />
    </head>
    <body>
        {% block body %}{% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "/home/webmaster/www/public_html/DevLeagues/app/Resources/views/base.html.twig");
    }
}
