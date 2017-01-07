<?php

/* @Framework/FormTable/hidden_row.html.php */
class __TwigTemplate_be6b087e5e66ae44fc6a44f01b0bf2bc01ce547baa8386bc5b9777ff52abd48d extends Twig_Template
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
        $__internal_14e2b146d0408cb12b3b6037b390ff48a89ae9563cb73d92c5990019795f3f55 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_14e2b146d0408cb12b3b6037b390ff48a89ae9563cb73d92c5990019795f3f55->enter($__internal_14e2b146d0408cb12b3b6037b390ff48a89ae9563cb73d92c5990019795f3f55_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        $__internal_71d833809b70db57c0f2b197e1a75b3705113751b6ffad28b8ca578d41e1c012 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_71d833809b70db57c0f2b197e1a75b3705113751b6ffad28b8ca578d41e1c012->enter($__internal_71d833809b70db57c0f2b197e1a75b3705113751b6ffad28b8ca578d41e1c012_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/hidden_row.html.php"));

        // line 1
        echo "<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_14e2b146d0408cb12b3b6037b390ff48a89ae9563cb73d92c5990019795f3f55->leave($__internal_14e2b146d0408cb12b3b6037b390ff48a89ae9563cb73d92c5990019795f3f55_prof);

        
        $__internal_71d833809b70db57c0f2b197e1a75b3705113751b6ffad28b8ca578d41e1c012->leave($__internal_71d833809b70db57c0f2b197e1a75b3705113751b6ffad28b8ca578d41e1c012_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/hidden_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<tr style=\"display: none\">
    <td colspan=\"2\">
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/hidden_row.html.php", "/var/www/html/devleagues/github/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/hidden_row.html.php");
    }
}
