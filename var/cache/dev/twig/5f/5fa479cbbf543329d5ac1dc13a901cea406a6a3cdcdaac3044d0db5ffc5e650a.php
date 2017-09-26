<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_38f9faa4e4993fdba8231b43a239e30d2d196573e1fafc75c94060dbbb4ef957 extends Twig_Template
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
        $__internal_4a5731c13b2cdda72a0ec6e782655369af44a1127601ee391a22e8a2f1c1ca7d = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_4a5731c13b2cdda72a0ec6e782655369af44a1127601ee391a22e8a2f1c1ca7d->enter($__internal_4a5731c13b2cdda72a0ec6e782655369af44a1127601ee391a22e8a2f1c1ca7d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_5d49724b778799909bfe4cf9e44b3d2f173a073598ee36468871c3b5349aeb4d = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_5d49724b778799909bfe4cf9e44b3d2f173a073598ee36468871c3b5349aeb4d->enter($__internal_5d49724b778799909bfe4cf9e44b3d2f173a073598ee36468871c3b5349aeb4d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_4a5731c13b2cdda72a0ec6e782655369af44a1127601ee391a22e8a2f1c1ca7d->leave($__internal_4a5731c13b2cdda72a0ec6e782655369af44a1127601ee391a22e8a2f1c1ca7d_prof);

        
        $__internal_5d49724b778799909bfe4cf9e44b3d2f173a073598ee36468871c3b5349aeb4d->leave($__internal_5d49724b778799909bfe4cf9e44b3d2f173a073598ee36468871c3b5349aeb4d_prof);

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
", "@Framework/FormTable/button_row.html.php", "/home/dsabre/Lavoro/2017/startsymfonyes2/vendor/symfony/symfony/src/Symfony/Bundle/FrameworkBundle/Resources/views/FormTable/button_row.html.php");
    }
}
