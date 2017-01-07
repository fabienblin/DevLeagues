<?php

/* @SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig */
class __TwigTemplate_14939bb5b7edd7fb9c362b6d174ea6bd8611cc8cc30206f806200c3483fd5f38 extends Twig_Template
{
    protected function doGetParent(array $context)
    {
        // line 12
        return $this->loadTemplate((isset($context["base_template"]) ? $context["base_template"] : $this->getContext($context, "base_template")), "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", 12);
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_5fc28d2eca080a6e272d1dfc0aa3566d261667f6546e2337e135a9e171f10550 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_5fc28d2eca080a6e272d1dfc0aa3566d261667f6546e2337e135a9e171f10550->enter($__internal_5fc28d2eca080a6e272d1dfc0aa3566d261667f6546e2337e135a9e171f10550_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $__internal_655efc14233593bc982b53f0fb6ac1be313a285415f5efefe53ceb33daebc543 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_655efc14233593bc982b53f0fb6ac1be313a285415f5efefe53ceb33daebc543->enter($__internal_655efc14233593bc982b53f0fb6ac1be313a285415f5efefe53ceb33daebc543_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig"));

        $this->getParent($context)->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5fc28d2eca080a6e272d1dfc0aa3566d261667f6546e2337e135a9e171f10550->leave($__internal_5fc28d2eca080a6e272d1dfc0aa3566d261667f6546e2337e135a9e171f10550_prof);

        
        $__internal_655efc14233593bc982b53f0fb6ac1be313a285415f5efefe53ceb33daebc543->leave($__internal_655efc14233593bc982b53f0fb6ac1be313a285415f5efefe53ceb33daebc543_prof);

    }

    public function getTemplateName()
    {
        return "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  9 => 12,);
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

{% extends base_template %}
", "@SonataAdmin/CRUD/edit_sonata_type_immutable_array.html.twig", "/var/www/html/devleagues/github/vendor/sonata-project/admin-bundle/Resources/views/CRUD/edit_sonata_type_immutable_array.html.twig");
    }
}
