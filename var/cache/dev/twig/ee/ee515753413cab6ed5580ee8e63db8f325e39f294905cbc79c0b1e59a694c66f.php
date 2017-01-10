<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_626dd25634233a20bc77ce8c759051088832a7d564d5757c5036fdf8ccb8bb71 extends Twig_Template
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
        $__internal_57c7f258368026c4728c6b659ea2c6ba0747565a27f7896b4f598fbbad1317c1 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_57c7f258368026c4728c6b659ea2c6ba0747565a27f7896b4f598fbbad1317c1->enter($__internal_57c7f258368026c4728c6b659ea2c6ba0747565a27f7896b4f598fbbad1317c1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_537a536bac8e8a77d17442178b42fc26211e07ae91bdc762dc6213dea6bd1e6e = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_537a536bac8e8a77d17442178b42fc26211e07ae91bdc762dc6213dea6bd1e6e->enter($__internal_537a536bac8e8a77d17442178b42fc26211e07ae91bdc762dc6213dea6bd1e6e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_57c7f258368026c4728c6b659ea2c6ba0747565a27f7896b4f598fbbad1317c1->leave($__internal_57c7f258368026c4728c6b659ea2c6ba0747565a27f7896b4f598fbbad1317c1_prof);

        
        $__internal_537a536bac8e8a77d17442178b42fc26211e07ae91bdc762dc6213dea6bd1e6e->leave($__internal_537a536bac8e8a77d17442178b42fc26211e07ae91bdc762dc6213dea6bd1e6e_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "/home/webmaster/www/public_html/DevLeagues/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
