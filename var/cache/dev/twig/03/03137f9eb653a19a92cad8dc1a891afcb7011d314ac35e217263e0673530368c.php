<?php

/* @AvanzuAdminTheme/Navbar/tasks.html.twig */
class __TwigTemplate_0d46f7ed3fbe0ac4d61585035cc2cfecb9fbc6c44e5c3c4105cc485fa635e15d extends Twig_Template
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
        $__internal_3aed320971dda66cf06d75262fb8cdef42468b91a64e0eba23e63cd1220b0f2d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_3aed320971dda66cf06d75262fb8cdef42468b91a64e0eba23e63cd1220b0f2d->enter($__internal_3aed320971dda66cf06d75262fb8cdef42468b91a64e0eba23e63cd1220b0f2d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/tasks.html.twig"));

        $__internal_11e55d2f6bdefa516df492e80be6983ebb204ce4d3d892bd1b28ce8a9a260c52 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_11e55d2f6bdefa516df492e80be6983ebb204ce4d3d892bd1b28ce8a9a260c52->enter($__internal_11e55d2f6bdefa516df492e80be6983ebb204ce4d3d892bd1b28ce8a9a260c52_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@AvanzuAdminTheme/Navbar/tasks.html.twig"));

        // line 1
        echo "<!-- Tasks: style can be found in dropdown.less -->
<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-flag-o\"></i>
        <span class=\"label label-danger\">";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total")), "html", null, true);
        echo "</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("You have %total% tasks", array("%total%" => (isset($context["total"]) ? $context["total"] : $this->getContext($context, "total"))), "AvanzuAdminTheme"), "html", null, true);
        echo "</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["tasks"]) ? $context["tasks"] : $this->getContext($context, "tasks")));
        foreach ($context['_seq'] as $context["_key"] => $context["task"]) {
            // line 13
            echo "                    <li>
                        <a href=\"";
            // line 14
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_show_task", array("taskid" => $this->getAttribute($context["task"], "identifier", array()))), "html", null, true);
            echo "\">
                            <h3>
                                ";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "title", array()), "html", null, true);
            echo "
                                <small class=\"pull-right\">";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-";
            // line 20
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "color", array()), "html", null, true);
            echo "\"
                                     style=\"width: ";
            // line 21
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"";
            // line 23
            echo twig_escape_filter($this->env, $this->getAttribute($context["task"], "progress", array()), "html", null, true);
            echo "\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("%progress%% Complete", array("%progress%" => $this->getAttribute($context["task"], "progress", array())), "AvanzuAdminTheme"), "html", null, true);
            echo "</span>
                                </div>
                            </div>
                        </a>
                    </li>
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['task'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "            </ul>
        <li class=\"footer\">
            <a href=\"";
        // line 34
        echo $this->env->getExtension('Symfony\Bridge\Twig\Extension\RoutingExtension')->getPath("avanzu_admin_all_tasks");
        echo "\">";
        echo twig_escape_filter($this->env, $this->env->getExtension('Symfony\Bridge\Twig\Extension\TranslationExtension')->trans("View all tasks", array(), "AvanzuAdminTheme"), "html", null, true);
        echo "</a>
        </li>
    </ul>
</li>";
        
        $__internal_3aed320971dda66cf06d75262fb8cdef42468b91a64e0eba23e63cd1220b0f2d->leave($__internal_3aed320971dda66cf06d75262fb8cdef42468b91a64e0eba23e63cd1220b0f2d_prof);

        
        $__internal_11e55d2f6bdefa516df492e80be6983ebb204ce4d3d892bd1b28ce8a9a260c52->leave($__internal_11e55d2f6bdefa516df492e80be6983ebb204ce4d3d892bd1b28ce8a9a260c52_prof);

    }

    public function getTemplateName()
    {
        return "@AvanzuAdminTheme/Navbar/tasks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  97 => 34,  93 => 32,  81 => 26,  75 => 23,  70 => 21,  66 => 20,  60 => 17,  56 => 16,  51 => 14,  48 => 13,  44 => 12,  37 => 8,  31 => 5,  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!-- Tasks: style can be found in dropdown.less -->
<li class=\"dropdown tasks-menu\">
    <a href=\"#\" class=\"dropdown-toggle\" data-toggle=\"dropdown\">
        <i class=\"fa fa-flag-o\"></i>
        <span class=\"label label-danger\">{{ total }}</span>
    </a>
    <ul class=\"dropdown-menu\">
        <li class=\"header\">{{ 'You have %total% tasks' |trans({'%total%':total}, 'AvanzuAdminTheme') }}</li>
        <li>
            <!-- inner menu: contains the actual data -->
            <ul class=\"menu\">
                {% for task in tasks %}
                    <li>
                        <a href=\"{{ path('avanzu_admin_show_task', {'taskid': task.identifier}) }}\">
                            <h3>
                                {{ task.title }}
                                <small class=\"pull-right\">{{ task.progress }}%</small>
                            </h3>
                            <div class=\"progress xs\">
                                <div class=\"progress-bar progress-bar-{{ task.color }}\"
                                     style=\"width: {{ task.progress }}%\"
                                     role=\"progressbar\"
                                     aria-valuenow=\"{{ task.progress }}\"
                                     aria-valuemin=\"0\"
                                     aria-valuemax=\"100\">
                                    <span class=\"sr-only\">{{ '%progress%% Complete'|trans({'%progress%':task.progress}, 'AvanzuAdminTheme') }}</span>
                                </div>
                            </div>
                        </a>
                    </li>
                {%  endfor  %}
            </ul>
        <li class=\"footer\">
            <a href=\"{{ path('avanzu_admin_all_tasks') }}\">{{'View all tasks'|trans({}, 'AvanzuAdminTheme')}}</a>
        </li>
    </ul>
</li>", "@AvanzuAdminTheme/Navbar/tasks.html.twig", "/var/www/html/devleagues/github/app/Resources/AvanzuAdminThemeBundle/views/Navbar/tasks.html.twig");
    }
}
